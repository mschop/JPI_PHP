<?php

namespace App\Commands;


use App\Auth\AuthConfig;
use App\Auth\UserAlreadyExistsException;
use App\CodeGeneration\PhpConfigBuilder;
use App\PathHelperInteface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\User;

class UserCreateCommand extends Command
{
    protected $pathHelper;
    protected $passwordEncoder;
    protected $configBuilder;

    public function __construct(
        PathHelperInteface $pathHelper,
        UserPasswordEncoderInterface $passwordEncoder,
        PhpConfigBuilder $configBuilder
    ) {
        parent::__construct();
        $this->pathHelper = $pathHelper;
        $this->passwordEncoder = $passwordEncoder;
        $this->configBuilder = $configBuilder;
    }

    protected function configure()
    {
        $this->setName('jpi:user:create');
        $this->setDescription('Create a new API user');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $questionHelper = $this->getHelper('question');

        $question = new Question('User Name: ');
        $userName = $questionHelper->ask($input, $output, $question);
        $question = new Question('Password: ');
        $question->setHidden(true);
        $question->setHiddenFallback(false);
        $password = $questionHelper->ask($input, $output, $question);

        $configPath = $this->pathHelper->getRootDir()->joinAtoms('users.php')->string();
        $config = file_exists($configPath) ? require($configPath) : [];

        $authConfig = new AuthConfig($config);

        $user = new User($userName, $password);
        try {
            $authConfig->addUser($userName, $this->passwordEncoder->encodePassword($user, $password));
        } catch (UserAlreadyExistsException $ex) {
            $output->writeln('<error>A user with the username already exists</error>');
            return 1;
        }

        file_put_contents($configPath, $this->configBuilder->build($authConfig->getConfig()));

        $output->writeln('<info>User created successfully.</info>');
        $output->writeln("Please Note! The created user only has basic access to the api. You should grant more rights to the new user by using the command 'bin/console jpi:user:grant'");
    }
}
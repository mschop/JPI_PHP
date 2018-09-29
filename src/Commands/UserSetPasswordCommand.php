<?php

namespace App\Commands;


use App\Auth\AuthConfig;
use App\Auth\UserNotFoundException;
use App\CodeGeneration\ConfigFileGenerator;
use App\PathHelperInteface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\User;

class UserSetPasswordCommand extends Command
{
    protected const ARGUMENT_USER_NAME = 'userName';

    protected $pathHelper;
    protected $passwordEncoder;

    public function __construct(PathHelperInteface $pathHelper, UserPasswordEncoderInterface $passwordEncoder)
    {
        parent::__construct();
        $this->pathHelper = $pathHelper;
        $this->passwordEncoder = $passwordEncoder;
    }

    protected function configure()
    {
        $this->setName('jpi:user:set_password');
        $this->setDescription('Set password for API user');
        $this->addArgument(static::ARGUMENT_USER_NAME, InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $userName = $input->getArgument(static::ARGUMENT_USER_NAME);
        $questionHelper = $this->getHelper('question');
        $question = new Question('New Password: ');
        $question->setHidden(true);
        $question->setHiddenFallback(false);
        $password = $questionHelper->ask($input, $output, $question);
        $user = new User($userName, null);
        $configFilePath = $this->pathHelper->getRootDir()->joinAtoms('users.php')->string();
        $config = file_exists($configFilePath) ? require($configFilePath) : [];
        $authConfig = new AuthConfig($config);

        try {
            $authConfig->updatePassword($userName, $this->passwordEncoder->encodePassword($user, $password));
        } catch(UserNotFoundException $ex) {
            $output->writeln('<error>User does not exist</error>');
        }

        file_put_contents($configFilePath, (new ConfigFileGenerator())->build($authConfig->getConfig()));
        $output->writeln('<info>Updated password</info>');
    }
}
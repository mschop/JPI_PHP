<?php

namespace App\Commands;


use App\Auth\AuthConfig;
use App\Auth\UserNotFoundException;
use App\CodeGeneration\PhpConfigBuilder;
use App\PathHelperInteface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserRemoveCommand extends Command
{
    protected const ARGUMENT_USER_NAME = 'userName';

    protected $pathHelper;
    protected $configBuilder;

    public function __construct(PathHelperInteface $pathHelper, PhpConfigBuilder $configBuilder)
    {
        parent::__construct();
        $this->pathHelper = $pathHelper;
        $this->configBuilder = $configBuilder;
    }

    protected function configure()
    {
        $this->setName('jpi:user:remove');
        $this->setDescription('Remove API user');
        $this->addArgument(static::ARGUMENT_USER_NAME, InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $configFile = $this->pathHelper->getRootDir()->joinAtoms('users.php')->string();
        $config = file_exists($configFile) ? require($configFile) : [];
        $authConfig = new AuthConfig($config);
        try {
            $authConfig->removeUser($input->getArgument(static::ARGUMENT_USER_NAME));
        } catch (UserNotFoundException $ex) {
            $output->writeln('<error>User does not exist</error>');
            return 2;
        }
        file_put_contents($configFile, $this->configBuilder->build($authConfig->getConfig()));
        $output->writeln("User removed");
    }
}
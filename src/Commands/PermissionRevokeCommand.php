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

class PermissionRevokeCommand extends Command
{
    const ARGUMENT_USER = 'user';
    const ARGUMENT_PERMISSIONS = 'permissions';

    protected $pathHelper;
    protected $phpConfigBuilder;

    public function __construct(PathHelperInteface $pathHelper, ConfigFileGenerator $phpConfigBuilder)
    {
        parent::__construct();
        $this->pathHelper = $pathHelper;
        $this->phpConfigBuilder = $phpConfigBuilder;
    }

    protected function configure()
    {
        $this->setName('jpi:permission:revoke');
        $this->setDescription('Revoke permissions of a user');
        $this->addArgument(
            static::ARGUMENT_USER,
            InputArgument::REQUIRED,
            'Name of the user you would like to revoke permissions from'
        );
        $this->addArgument(
            static::ARGUMENT_PERMISSIONS,
            InputArgument::REQUIRED,
            'Permissions you would like to revoke from the user. Can be a comma separated list.'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = $input->getArgument(static::ARGUMENT_USER);
        $permissions = $input->getArgument(static::ARGUMENT_PERMISSIONS);
        $permissions = mb_strtoupper($permissions);
        $permissions = explode(',', $permissions);
        $userFilePath = $this->pathHelper->getRootDir()->joinAtoms('users.php');
        $plainConfig = file_exists($userFilePath) ? require($userFilePath) : [];
        $authConfig = new AuthConfig($plainConfig);
        try {
            $authConfig->removeRoles($user, $permissions);
        } catch (UserNotFoundException $ex) {
            $output->writeln('<error>User does not exist.</error>');
            return 1;
        }
        file_put_contents($userFilePath, $this->phpConfigBuilder->build($authConfig->getConfig()));
        $output->writeln('<info>Successfully revoked roles</info>');
        return 0;
    }
}
<?php

namespace App\Commands;


use App\Auth\AuthConfig;
use App\Auth\UserNotFoundException;
use App\CodeGeneration\ConfigFileGenerator;
use App\PathHelperInteface;
use function Functional\map;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PermissionGrantCommand extends Command
{
    protected const ARGUMENT_USER = 'user';
    protected const ARGUMENT_PERMISSIONS = 'permissions';

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
        $this->setName('jpi:permission:grant');
        $this->addArgument(
            static::ARGUMENT_USER,
            InputArgument::REQUIRED,
            'Name of the user, you would like to grant permissions'
        );
        $this->addArgument(
            static::ARGUMENT_PERMISSIONS,
            InputArgument::REQUIRED,
            'Permissions you would like to grant to the user. Can be a comma separated list of permissions.'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = $input->getArgument(static::ARGUMENT_USER);
        $permissions = $input->getArgument(static::ARGUMENT_PERMISSIONS);
        $permissions = mb_strtoupper($permissions);
        $permissions = explode(',', $permissions);
        $usersFilePath = $this->pathHelper->getRootDir()->joinAtoms('users.php');
        $plainConfig = file_exists($usersFilePath) ? require($usersFilePath) : [];
        $authConfig = new AuthConfig($plainConfig);
        try {
            $authConfig->addRoles($user, map($permissions, function(string $permission) {
                if (mb_strpos($permission, 'ROLE_') === false) {
                    return 'ROLE_' . $permission;
                }
            }));
        } catch (UserNotFoundException $ex) {
            $output->writeln('<error>User not found</error>');
            return 1;
        }
        file_put_contents($usersFilePath, $this->phpConfigBuilder->build($authConfig->getConfig()));
        $output->writeln('<info>Successfully granted new permissions.</info>');
        return 0;
    }
}
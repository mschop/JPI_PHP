<?php

namespace App\Commands;


use App\Auth\AuthConfig;
use App\Auth\UserNotFoundException;
use App\PathHelperInteface;
use function Functional\map;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PermissionShowCommand extends Command
{
    protected const ARGUMENT_USER = 'user';

    protected $pathHelper;

    public function __construct(PathHelperInteface $pathHelper)
    {
        parent::__construct();
        $this->pathHelper = $pathHelper;
    }

    protected function configure()
    {
        $this->setName('jpi:permission:show');
        $this->setDescription('Show the permissions granted to a specific user.');
        $this->addArgument(static::ARGUMENT_USER, InputArgument::REQUIRED, 'Username of the user');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = $input->getArgument(static::ARGUMENT_USER);
        $userFilePath = $this->pathHelper->getRootDir()->joinAtoms('users.php');
        $rawConfig = file_exists($userFilePath) ? require($userFilePath) : [];
        $authConfig = new AuthConfig($rawConfig);
        try {
            $roles = $authConfig->getRoles($user);
        } catch (UserNotFoundException $ex) {
            $output->writeln('<error>User does not exist</error>');
            return 1;
        }
        if (empty($roles)) {
            $output->writeln('<info>User has granted no permissions</info>');
        } else {
            $output->writeln('<info>The following permissions are granted to the user:</info>');
            $roles = map($roles, function(string $role) {
                return str_replace('ROLE_', '', $role);
            });
            $output->writeln(implode(', ', $roles));
        }
    }
}
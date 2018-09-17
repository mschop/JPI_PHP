<?php

namespace App\Commands;


use App\Auth\AuthConfig;
use App\PathHelperInteface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserListCommand extends Command
{
    protected $pathHelper;

    public function __construct(PathHelperInteface $pathHelper)
    {
        parent::__construct();
        $this->pathHelper = $pathHelper;
    }

    protected function configure()
    {
        $this->setName('jpi:user:list');
        $this->setDescription('List all API user');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $configFilePath = $this->pathHelper->getRootDir()->joinAtoms('users.php')->string();
        $config = file_exists($configFilePath) ? require($configFilePath) : [];
        $authConfig = new AuthConfig($config);
        $userNames = $authConfig->getAllUserNames();
        if (empty($userNames)) {
            $output->writeln('There are no users');
            return 0;
        }

        foreach ($userNames as $name) {
            $output->writeln(" - $name");
        }

        return 0;
    }
}
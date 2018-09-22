<?php

namespace App\Commands;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Role\RoleHierarchyInterface;

class PermissionListCommand extends Command
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        parent::__construct();
        $this->container = $container;
    }

    protected function configure()
    {
        $this->setName('jpi:permission:list');
        $this->setDescription('List available permissions');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $roles = $this->container->getParameter('security.role_hierarchy.roles');
        $this->printRoles($output, '', $roles);
        return 0;
    }

    protected function printRoles(OutputInterface $output, string $indentation, array $roles)
    {
        foreach ($roles as $key => $value) {
            if (is_array($value)) {
                $this->printRole($output, $indentation, $key);
                $this->printRoles($output, $indentation . '   ', $value);
            } else {
                $this->printRole($output, $indentation, $value);
            }
        }
    }

    protected function printRole(OutputInterface $output, string $indentation, string $role)
    {
        $output->writeln($indentation . '- ' . str_replace('ROLE_', '', $role));
    }
}
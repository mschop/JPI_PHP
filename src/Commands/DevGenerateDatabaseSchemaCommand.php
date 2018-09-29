<?php

namespace App\Commands;


use App\CodeGeneration\DatabaseSchemaGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DevGenerateDatabaseSchemaCommand extends Command
{
    protected $schemaGenerator;

    public function __construct(DatabaseSchemaGenerator $schemaGenerator)
    {
        parent::__construct();
        $this->schemaGenerator = $schemaGenerator;
    }

    protected function configure()
    {
        $this->setName('dev:generate:database_schema');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->schemaGenerator->generate();
    }
}
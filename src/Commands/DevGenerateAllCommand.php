<?php

namespace App\Commands;


use App\CodeGeneration\ApiDocsGenerator;
use App\CodeGeneration\DatabaseSchemaGenerator;
use App\CodeGeneration\SchemaGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DevGenerateAllCommand extends Command
{
    protected $databaseSchemaGenerator;
    protected $schemaGenerator;
    protected $apiDocsGenerator;

    public function __construct(
        DatabaseSchemaGenerator $databaseSchemaGenerator,
        SchemaGenerator $schemaGenerator,
        ApiDocsGenerator $apiDocsGenerator
    ) {
        parent::__construct();
        $this->databaseSchemaGenerator = $databaseSchemaGenerator;
        $this->schemaGenerator = $schemaGenerator;
        $this->apiDocsGenerator = $apiDocsGenerator;
    }


    protected function configure()
    {
        $this->setName('dev:generate:all');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->databaseSchemaGenerator->generate();
        $this->schemaGenerator->generate();
        $this->apiDocsGenerator->generate();
    }
}
<?php

namespace App\Commands;


use App\DbConnectionProviderInterface;
use App\PathHelperInteface;
use App\SchemaGeneratorInterface;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DevGenerateSchemaCommand extends Command
{
    protected $schemaGenerator;

    public function __construct(SchemaGeneratorInterface $schemaGenerator)
    {
        parent::__construct();
        $this->schemaGenerator = $schemaGenerator;
    }

    protected function configure()
    {
        $this->setName('dev:generate:schema');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->schemaGenerator->generate();
    }
}
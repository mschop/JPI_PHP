<?php

namespace App\Commands;


use App\CodeGeneration\SchemaGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DevGenerateSchemaCommand extends Command
{
    protected $generator;

    public function __construct(SchemaGenerator $generator)
    {
        parent::__construct();
        $this->generator = $generator;
    }


    protected function configure()
    {
        $this->setName('dev:generate:schema');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->generator->generate();
    }
}
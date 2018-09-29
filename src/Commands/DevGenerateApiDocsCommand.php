<?php

namespace App\Commands;


use App\CodeGeneration\ApiDocsGenerator;
use App\PathHelperInteface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DevGenerateApiDocsCommand extends Command
{
    protected $apiDocsGenerator;

    public function __construct(ApiDocsGenerator $apiDocsGenerator)
    {
        parent::__construct();
        $this->apiDocsGenerator = $apiDocsGenerator;
    }

    protected function configure()
    {
        $this->setName('dev:generate:apidocs');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->apiDocsGenerator->generate();
    }
}
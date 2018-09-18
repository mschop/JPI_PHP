<?php

namespace App\Commands;


use App\PathHelperInteface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DevGenerateApiDocsCommand extends Command
{
    protected $pathHelper;

    public function __construct(PathHelperInteface $pathHelper)
    {
        parent::__construct();
        $this->pathHelper = $pathHelper;
    }

    protected function configure()
    {
        $this->setName('dev:generate:apidocs');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $openapi = \OpenApi\scan($this->pathHelper->getRootDir()->joinAtoms('src')->string());
        file_put_contents($this->pathHelper->getRootDir()->joinAtoms('docs', 'api', 'jpi.json'), $openapi->toJson());
    }
}
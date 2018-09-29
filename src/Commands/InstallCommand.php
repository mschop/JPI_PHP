<?php

namespace App\Commands;


use App\CodeGeneration\ConfigFileGenerator;
use App\PathHelperInteface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class InstallCommand extends Command
{
    private const OPTION_DB_HOST = 'dbhost';
    private const OPTION_DB_PORT = 'dbport';
    private const OPTION_DB_USER = 'dbuser';
    private const OPTION_DB_PASS = 'dbpass';

    protected $pathHelper;
    protected $configBuilder;

    public function __construct(PathHelperInteface $pathHelper, ConfigFileGenerator $configBuilder)
    {
        parent::__construct();
        $this->pathHelper = $pathHelper;
        $this->configBuilder = $configBuilder;
    }

    protected function configure()
    {
        $this->setName('jpi:install');
        $this->setDescription('Install JPI (create config.php & prepare mssql)');
        $this->addOption(self::OPTION_DB_HOST, null, InputOption::VALUE_OPTIONAL);
        $this->addOption(self::OPTION_DB_PORT, null, InputOption::VALUE_OPTIONAL);
        $this->addOption(self::OPTION_DB_USER, null, InputOption::VALUE_OPTIONAL);
        $this->addOption(self::OPTION_DB_PASS, null, InputOption::VALUE_OPTIONAL);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $configFile = $this->pathHelper->getRootDir()->joinAtoms('config.php');
        if (file_exists($configFile->string())) {
            $output->writeln('<error>Config file already exists. Aborting installation.</error>');
            return 1;
        }

        $config = [
            'db' => []
        ];

        $questionHelper = $this->getHelper('question');

        if ($input->getOption(self::OPTION_DB_HOST) === null) {
            $question = new Question('Database Host (default: localhost):', 'localhost');
            $config['db']['host'] = $questionHelper->ask($input, $output, $question);
        } else {
            $config['db']['host'] = $input->getOption(self::OPTION_DB_HOST);
        }

        if ($input->getOption(self::OPTION_DB_PORT) === null) {
            $question = new Question('Database Port (default: 1433):', '1433');
            $config['db']['port'] = $questionHelper->ask($input, $output, $question);
        } else {
            $config['db']['port'] = $input->getOption(self::OPTION_DB_PORT);
        }

        if ($input->getOption(self::OPTION_DB_USER) === null) {
            $question = new Question('Database User (default: sa):', 'sa');
            $config['db']['user'] = $questionHelper->ask($input, $output, $question);
        } else {
            $config['db']['user'] = $input->getOption(self::OPTION_DB_USER);
        }

        if ($input->getOption(self::OPTION_DB_PASS) === null) {
            $question = new Question('Database Password (default: sa04jT14):', 'sa04jT14');
            $config['db']['pass'] = $questionHelper->ask($input, $output, $question);
        } else {
            $config['db']['pass'] = $input->getOption(self::OPTION_DB_PASS);
        }

        file_put_contents($configFile->string(), $this->configBuilder->build($config));

        return 0;
    }
}
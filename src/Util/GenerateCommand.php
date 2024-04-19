<?php

namespace WSD\BrightSignApi\Util;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCommand extends Command
{

    private $options;
    public function __construct($name = null, $options = [])
    {
        parent::__construct($name);
        $this->options = $options;
    }

    protected function configure()
    {
        $this->setName("generate")
            ->setDescription("Generates entities")
            ->addArgument('a_wsdl', InputArgument::REQUIRED, 'The WSDL to use for the Application Service')
            ->addArgument('cu_wsdl', InputArgument::REQUIRED, 'The WSDL to use for the Content Upload Service');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        try {
            Generate::generate($input->getArguments(), $this->options);
        } catch (\Exception $e) {
            $output->writeln('An error occured while trying to create entity classes');
            exit(1);
        }
        $output->writeln('Entity classes successfully created');
    }

}

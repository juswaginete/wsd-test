<?php

namespace WSD\BrightSignApi\Util;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use WSD\BrightSignApi\Api;
use WSD\BrightSignApi\Entity\Application\Authenticate;

class TestCommand extends Command
{

    protected function configure()
    {
        $this->setName("test")
            ->setDescription("Test connection to WSDL host")
            ->addArgument('username', InputArgument::REQUIRED)
            ->addArgument('password', InputArgument::REQUIRED)
            ->addArgument('account', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $api = new Api();
        $api->setAuthenticationOptions(
            $input->getArgument('username'),
            $input->getArgument('password'),
            $input->getArgument('account'));

        try {
            $api->getApplicationClient()->Authenticate(new Authenticate);
        } catch (\Exception $e) {
            if ($output->getVerbosity() >= OutputInterface::VERBOSITY_VERBOSE) {
                $output->writeln('There was an error connecting to the Application Service API: ' . $e->getMessage());

                if ($output->getVerbosity() >= OutputInterface::VERBOSITY_VERY_VERBOSE) {
                    $output->writeln('');
                    $output->writeln('Request Headers: ' . $api->getApplicationClient()->__getLastRequestHeaders());
                    $output->writeln('Request: ' . $api->getApplicationClient()->__getLastRequest());
                    $output->writeln('Response Headers: ' . $api->getApplicationClient()->__getLastResponseHeaders());
                    $output->writeln('Response: ' . $api->getApplicationClient()->__getLastResponse());
                }
            } else {
                $output->writeln('Connection unsuccessful');
            }
            exit(1);
        }

        $output->writeln('Connection successful');
    }
}

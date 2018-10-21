<?php

namespace chesnutcase\ComposerPublisher;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\Command\BaseCommand;

class CommandProvider implements CommandProviderCapability
{
    public function getCommands()
    {
        return array(new Command());
    }
}

class Command extends BaseCommand
{
    protected function configure()
    {
        $this->setName('publish')
            ->setDescription('Creates releases to github')
            ->setHelp('Help Text goes here...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World!');
    }
}

<?php 

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class SpeakCommand extends Command
{
    protected function configure()
    {
        // Name the command
        // Set the description
        // Set the arguments
        // Set options and all the configuartion
        $this->setName('speak')
             ->setDescription('Speak a message.')
             ->addArgument('message', InputArgument::OPTIONAL, 'What quote would you like?', 'I only speak when given a message');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Logic to execute the command
        exec('say ' . $input->getArgument('message'));

        $output->writeln('Done.');
    }
}
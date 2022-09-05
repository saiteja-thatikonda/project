<?php
namespace I95dev\Command\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Index extends Command
{
   protected function configure()
   {
       $this->setName('example:i95dev');
       $this->setDescription('Demo command line');
       
       parent::configure();
   }
   protected function execute(InputInterface $input, OutputInterface $output)
   {
       $output->writeln("Hello Welcome");
   }
}

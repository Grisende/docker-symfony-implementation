<?php

namespace App\Command;

use App\Service\HashService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


#[AsCommand(
    name: 'avato:test',
    description: 'creates new hashes',
    aliases: ['avato:test'],
    hidden: false
)]

class CreateHashesCommand extends Command
{
    public function __construct(private readonly HashService $service)
    {
        parent::__construct();
    }

    public function configure(): void
    {
        $this
            ->setHelp('This command generate new hashes')
            ->addArgument('string', InputArgument::REQUIRED, 'The initial string')
            ->addArgument('requests', InputArgument::REQUIRED, 'The initial string');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $this->service->createHash($input->getArgument('string'), $input->getArgument('requests'));

        $output->writeln([
            'Hashes Creator',
            '============',
            '',
        ]);
        $output->writeln('Done!');
        $output->writeln('Hashes created Successful');


        return 0;
    }

}
<?php

namespace App\Command;

use App\Repository\CommentRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CleanCommentsCommand extends Command
{
    protected static $defaultName = 'app:clean-comments';

    private $commentRepository;

    /**
     * CleanCommentsCommand constructor.
     */

    public function __construct(CommentRepository $commentRepository)
    {
        parent::__construct();
        $this->commentRepository = $commentRepository;
    }

    protected function configure()
    {
        $this
            ->setDescription('To Clean comment')
            ->addArgument('id', InputArgument::OPTIONAL, 'Id of the comment to clean')
            ->addOption('all', null, InputOption::VALUE_NONE, 'Delete all comments')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {   
        
        $io = new SymfonyStyle($input, $output);
        $id = $input->getArgument('id');

        if ($id) {
            $io->note(sprintf('You passed an argument: %s', $id));
            $this->commentRepository->deleteCommentByArticle($id);
        }
        
        else{
            $io->note('No article specified');
        }

        if ($input->getOption('all')) {
            $this->commentRepository->deleteAll();
        }

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}

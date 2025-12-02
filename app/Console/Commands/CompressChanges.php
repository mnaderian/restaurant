<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Output\OutputInterface;

class CompressChanges extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'compress-changes {from? : A commit hash. If specified, the range of commits from that commit up to the HEAD will be chosen to gather the list of changed files.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Compress the changed files and folders committed to the git repository into a zip file.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $from = $this->argument('from');

        if (is_null($from))
            $from = '';

        // Generate the zip file
        exec("git diff-tree -r --name-only --no-commit-id $from HEAD > diff && more diff | zip -@ diff.zip && rm diff");

        // Move zip file to Desktop
        exec('mv diff.zip ~/Desktop/');

        $message = 'Changed files zipped and placed into your Desktop as diff.zip';

        $this->components->info($message, OutputInterface::OUTPUT_NORMAL);
    }
}

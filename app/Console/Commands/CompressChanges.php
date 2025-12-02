<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use Symfony\Component\Console\Output\OutputInterface;
use ZipArchive;

class CompressChanges extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'compress-changes 
            {from? : A commit hash. If specified, the range of commits from that commit up to the HEAD will be chosen to gather the list of changed files.} 
            {--include-public : Includes the public directory}
        ';

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
        is_null($from) ?? $from = '';

        // Get files list
        $command = "git diff --name-only $from";
        $list = array_filter(array_map('trim', explode("\n", shell_exec($command))));

        // Generate Zip file
        $diff = "diff.zip";
        $zip = $this->generateZipFile($diff, $list, $this->option('include-public'));

        // Move zip file to Desktop
        $this->moveToDesktop($diff);

        // Sending message
        $message = "Changed files zipped and placed into your Desktop as $diff";
        $this->components->info($message, OutputInterface::OUTPUT_NORMAL);
    }

    public function getDesktopPath()
    {
        $desktop = getenv('HOME') . '/Desktop';

        if (stripos(PHP_OS_FAMILY, 'Windows') !== false) {
            $desktop = getenv('HOMEDRIVE') . getenv('HOMEPATH') . '\\Desktop';
        }

        return $desktop;
    }

    public function moveToDesktop($file)
    {
        $desktop = $this->getDesktopPath();
        copy($file, $desktop . '/' . $file);
        unlink($file);
    }

    public function generateZipFile($diff, $list, $includePublic = false)
    {
        $zip = new ZipArchive;
        if ($zip->open($diff, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== TRUE) {
            die("Cannot create zip file\n");
        }
        foreach ($list as $item) {
            if (file_exists($item)) {
                $zip->addFile($item, $item);
            }
        }

        if ($includePublic) {
            $publicPath = realpath('./public');
            if ($publicPath && is_dir($publicPath)) {
                foreach (
                    new RecursiveIteratorIterator(
                        new RecursiveDirectoryIterator($publicPath, RecursiveDirectoryIterator::SKIP_DOTS),
                        RecursiveIteratorIterator::SELF_FIRST
                    ) as $file
                ) {
                    $localPath = 'public/' . str_replace('\\', '/', substr($file->getPathname(), strlen($publicPath) + 1));
                    $file->isDir() ? $zip->addEmptyDir($localPath) : $zip->addFile($file->getPathname(), $localPath);
                }
            }
        }

        $zip->close();

        return $zip;
    }
}

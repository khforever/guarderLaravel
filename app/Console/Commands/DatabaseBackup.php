<?php

namespace App\Console\Commands;
use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class DatabaseBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automating Daily Backups';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (! Storage::exists('backup')) {
            Storage::makeDirectory('backup');
        }
 
       // $filename = "backup-" . Carbon::now()->format('Y-m-d') . ".gz";
        $filename = "backup-" . Carbon::now()->format('Y-m-d') . ".sql";


        $command = "mysqldump --user=" . env('DB_USERNAME') .
        " --password=" . env('DB_PASSWORD') . " --host=" . env('DB_HOST') .
         " " . env('DB_DATABASE') . " > " . storage_path() . "/app/backup/" . $filename;

        
    
        // $command = "mysqldump --user=" . env('DB_USERNAME') ." --password=" . env('DB_PASSWORD')
        //         . " --host=" . env('DB_HOST') . " " . env('DB_DATABASE') 
        //         . "  | gzip > " . storage_path() . "/app/backup/" . $filename;
 
        $returnVar = NULL;
        $output  = NULL;
 
        exec($command, $output, $returnVar);
    }
    
}

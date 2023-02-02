<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class records extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to show database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $data = DB::table('teacher')->get();
        foreach($data as $data)
        {
            echo "<pre>";
            print_r([$data]);
            
        }
    }
}

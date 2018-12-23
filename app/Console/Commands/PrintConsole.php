<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PrintConsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'enuygun-task:title';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enuygun Task';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('deneme !');
    }
}

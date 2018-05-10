<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ShowGreet extends Command
{
    /**
     * The name and signature of the console command.
     * 执行 命令的 指令  php artisan laravist:hello
     * @var string
     */
    protected $signature = 'laravist:hello {name?}';  //laravist:hello

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'command description -- hello who';

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
        $this->info('Hello My Boy '.$this->argument('name'));
    }
}

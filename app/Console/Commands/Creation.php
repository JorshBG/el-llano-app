<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Creation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:creation { names : The name of the application }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $names = explode(',', $this->argument('names'));

        foreach ($names as $name) {
            $this->call('make:model', ['name' => $name]);
            $this->call('make:controller', ['name' => $name .  'Controller']);
            $this->call('make:factory', ['name' => $name .  'Factory']);
        }

    }
}

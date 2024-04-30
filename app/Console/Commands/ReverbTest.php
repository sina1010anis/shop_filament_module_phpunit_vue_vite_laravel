<?php

namespace App\Console\Commands;

use App\Events\ButtonClick;
use App\Events\Message;
use Illuminate\Console\Command;

class ReverbTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:reverb';

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
        echo 'Hello Reverb';
        Message::dispatch();
    }
}

<?php

namespace App\Console\Commands;

use App\events\TestEvent;
use App\Jobs\ProcessPodcast;
use Illuminate\Console\Command;
use Napopravku\Events\EventJob;
use Napopravku\Events\UserEvents\UserSubscribing;

class Dispatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tst';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Запуск тестового ивента';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      ProcessPodcast::dispatch('qwrqwrqwr');
    }
}

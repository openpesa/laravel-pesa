<?php

namespace Openpesa\LaravelPesa\Commands;

use Illuminate\Console\Command;

class PesaCommand extends Command
{
    public $signature = 'laravel-pesa';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

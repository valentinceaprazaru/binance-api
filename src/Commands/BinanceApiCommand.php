<?php

namespace Valentinceaprazaru\BinanceApi\Commands;

use Illuminate\Console\Command;

class BinanceApiCommand extends Command
{
    public $signature = 'binance-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

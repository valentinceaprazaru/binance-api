<?php

namespace Valentinceaprazaru\BinanceApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Valentinceaprazaru\BinanceApi\BinanceApi
 */
class BinanceApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'binance-api';
    }
}

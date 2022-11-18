<?php

namespace Ekremogul\LivewireBreakpoints\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ekremogul\LivewireBreakpoints\LivewireBreakpoints
 */
class LivewireBreakpoints extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ekremogul\LivewireBreakpoints\LivewireBreakpoints::class;
    }
}

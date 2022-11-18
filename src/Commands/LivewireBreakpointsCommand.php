<?php

namespace Ekremogul\LivewireBreakpoints\Commands;

use Illuminate\Console\Command;

class LivewireBreakpointsCommand extends Command
{
    public $signature = 'livewire-breakpoints';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

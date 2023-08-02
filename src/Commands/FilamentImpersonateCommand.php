<?php

namespace XliteDev\FilamentImpersonate\Commands;

use Illuminate\Console\Command;

class FilamentImpersonateCommand extends Command
{
    public $signature = 'filament-impersonate';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

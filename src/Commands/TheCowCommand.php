<?php

namespace Hemilioaraujo\TheCow\Commands;

use Illuminate\Console\Command;

class TheCowCommand extends Command
{
    public $signature = 'the-cow';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

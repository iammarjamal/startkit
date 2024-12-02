<?php

namespace Iammarjamal\Startkit\Commands;

use Illuminate\Console\Command;

class StartkitCommand extends Command
{
    public $signature = 'startkit';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

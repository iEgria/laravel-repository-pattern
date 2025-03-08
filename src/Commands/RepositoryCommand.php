<?php

namespace Ainur\Repository\Commands;

use Illuminate\Console\Command;

class RepositoryCommand extends Command
{
    public $signature = 'laravel-repository-pattern';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

<?php

namespace AsayHome\FilaAppSetting\Commands;

use Illuminate\Console\Command;

class FilaAppSettingCommand extends Command
{
    public $signature = 'fila-app-setting';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

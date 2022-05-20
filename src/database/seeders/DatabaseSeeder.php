<?php

namespace Database\Seeders;

use Hito\Core\Database\Enums\SeederType;

class DatabaseSeeder extends BaseSeeder
{
    protected function getType(): SeederType
    {
        return SeederType::MAIN;
    }
}

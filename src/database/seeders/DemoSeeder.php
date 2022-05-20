<?php

namespace Database\Seeders;

use Hito\Core\Database\Enums\SeederType;

class DemoSeeder extends BaseSeeder
{
    protected function getType(): SeederType
    {
        return SeederType::DEMO;
    }
}

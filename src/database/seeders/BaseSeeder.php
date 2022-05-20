<?php

namespace Database\Seeders;

use Hito\Core\Database\Enums\SeederType;
use Hito\Core\Database\Facades\DatabaseSeeder as DatabaseSeederFacade;
use Illuminate\Database\Seeder;

abstract class BaseSeeder extends Seeder
{
    abstract protected function getType(): SeederType;

    public function run()
    {
        foreach (DatabaseSeederFacade::getAll($this->getType()) as $seeder) {
            $this->call($seeder);
        }
    }
}

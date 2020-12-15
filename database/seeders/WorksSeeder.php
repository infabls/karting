<?php

namespace Database\Seeders;

use App\Models\Works;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;

/**
 * Class WorksTableSeeder.
 */
class WorksSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Add the master administrator, Works id of 1
        Works::create([
            'id' => '1',
            'ownerId' => '1',
            'name' => 'Первый лот',
            'price' => 1000,
            'status' => 'on',
        ]);
        Works::create([
            'id' => '2',
            'ownerId' => '2',
            'name' => 'Второй лот',
            'price' => 1000,
            'status' => 'on',
        ]);

        $this->enableForeignKeys();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Lubricant;
use Illuminate\Database\Seeder;

class LubricantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lubricant::factory()
            ->count(10)
            ->create();
    }
}

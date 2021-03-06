<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            //ProductCategorySeeder::class,
            //LubricantSeeder::class,
            UserSeeder::class,
            FamilySeeder::class,
            CategorieSeeder::class,
            LubricantSeeder::class,
            TurboSeeder::class,
            CartuchosSeeder::class
        ]);
    }
}

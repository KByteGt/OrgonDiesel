<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Soporte',
            'email' => 'art.mind.gt@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('@orgondiesel.support'),
            'remember_token' => Str::random(10)
        ]);
    }
}

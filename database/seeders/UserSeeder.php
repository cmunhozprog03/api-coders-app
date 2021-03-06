<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Christovam Munhoz',
            'email' => 'cmunhozprog03@hotmail.com',
            'password' => bcrypt('Georgia*90')
        ]);

        User::factory(99)->create();
    }
}

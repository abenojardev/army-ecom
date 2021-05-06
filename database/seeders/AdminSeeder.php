<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jose P Laurel',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'account_type' => 'admin'
        ]);
    }
}

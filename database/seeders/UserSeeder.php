<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Gibran',
            'email' => 'gibranabyan082@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}

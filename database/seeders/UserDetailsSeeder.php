<?php

namespace Database\Seeders;

use App\Models\UserDetails;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        UserDetails::create([
            'name' => 'Gibran',
            'fullname' => 'Gibran Abyan Rifai',
            'email' => 'gibran@gmail.com',
            'phone' => '085335497801',
            'address' => 'Yogyakarta',
            'university' => 'Universitas Negeri Yogyakarta',
        ]);
    }
}

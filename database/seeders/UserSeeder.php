<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Admin Web',
            'email' => 'adminweb@admin.com',
            'roles' => 'admin web',
            'password' => bcrypt('adminweb')
        ]);
        User::create([
            'name' => 'Admin Super',
            'email' => 'adminsuper@email.com',
            'roles' => 'admin super',
            'password' => bcrypt('adminsuper')
        ]);
        User::create([
            'name' => '',
            'email' => 'soppeng@gmail.com',
            'roles' => 'kab/kota',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Hanapi Bagas Pamungkas',
            'email' => 'hanafibagas4@gmail.com',
            'roles' => 'masyarakat',
            'password' => bcrypt('1234567890')
        ]);
    }
}

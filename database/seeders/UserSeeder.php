<?php

namespace Database\Seeders;

use App\Models\Jabatan;
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
    }
}

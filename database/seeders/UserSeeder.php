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
        User::create([
            'name' => 'UPT Balai Pelatihan Kerja',
            'email' => 'uptbalaipelatihankerja@gmail.com',
            'roles' => 'upt',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'UPT Pengawasan Ketenagakerjaan Wilayah I',
            'email' => 'uptbalaipelatihankerjawilayahI@gmail.com',
            'roles' => 'upt',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'UPT Pengawasan Ketenagakerjaan Wilayah II',
            'email' => 'uptbalaipelatihankerjawilayahII@gmail.com',
            'roles' => 'upt',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'UPT Pengawasan Ketenagakerjaan Wilayah III',
            'email' => 'uptbalaipelatihankerjawilayahIII@gmail.com',
            'roles' => 'upt',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'UPT Pengawasan Ketenagakerjaan Wilayah IV',
            'email' => 'uptbalaipelatihankerjawilayahIV@gmail.com',
            'roles' => 'upt',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Bidang Pengembangan Ketenagakerjaan',
            'email' => 'bidangpengembanganketenagakerjaan@gmail.com',
            'roles' => 'upt',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Bidang Pengawasan Ketenagakerjaan',
            'email' => 'bidangpengawasanketenagakerjaan@gmail.com',
            'roles' => 'upt',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Bidang Hubungan Industrial',
            'email' => 'bidanghubunganindustrial@gmail.com',
            'roles' => 'upt',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Bidang Ketransmigrasian',
            'email' => 'bidangketransmigrasian@gmail.com',
            'roles' => 'upt',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Sekretariat',
            'email' => 'sekretariat@gmail.com',
            'roles' => 'upt',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Hanapi Bagas Pamungkas',
            'email' => 'hanafibagas4@gmail.com',
            'roles' => 'masyarakat',
            'password' => bcrypt('1234567890')
        ]);
        Jabatan::create([
            'jabatan' => 'Kepala Dinas'
        ]);
    }
}

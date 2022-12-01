<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([

            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('Panther.1@d@123'),
            'photos' => '',
            'role_id' => 1


        ]);

        User::create([

            'name' => 'Bpo@admin',
            'email' => 'bpo@admin.com',
            'password' => bcrypt('admin2@bpo.id'),
            'photos' => '',
            'role_id' => 2


        ]);

        User::create([

            'name' => 'Chapter@admin',
            'email' => 'chapter@admin.com',
            'password' => bcrypt('admin3@chapter.id'),
            'photos' => '',
            'role_id' => 3


        ]);

        User::create([

            'name' => 'Korwil@admin',
            'email' => 'korwil@admin.com',
            'password' => bcrypt('admin4@korwil.id'),
            'photos' => '',
            'role_id' => 4

        ]);
    }
}

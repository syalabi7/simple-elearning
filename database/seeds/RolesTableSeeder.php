<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //add role
        $roles = [
            [
                'name' => 'lecturer',
                'display_name' => 'Lecturer',
                'description' => 'Only lecturer can access',
            ],
            [
                'name' => 'students',
                'display_name' => 'Students',
                'description' => 'Access for students',
            ],
        ];
        foreach ($roles as $key => $value) {
            Role::create($value);
        }
        //add user
        $users = [
            [
                'name' => 'dosen1',
                'email' => 'dosen1@local.local',
                'password' => bcrypt('dosen1'),
            ],
            [
                'name' => 'mahasiswa1',
                'email' => 'mahasiswa1@local.local',
                'password' => bcrypt('mahasiswa1'),
            ],
        ];
        $n=1;
        foreach ($users as $key => $value) {
            $user=User::create($value);
            $user->attachRole($n);
            $n++;
        }
    }
}

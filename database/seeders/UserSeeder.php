<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{

        $user=User::create([
            'name'=>'Luis Alberto Quilla Lopez',
            'email'=>'luis@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $user->assignRole('Administrador');

        $user=User::create([
            'name'=>'hiram jeremy',
            'email'=>'hiramjeremy.hairado@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $user->assignRole('Coordinador');

        $user=User::create([
            'name'=>'neil camacho',
            'email'=>'neil@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $user->assignRole('Supervisor');

        $user=User::create([
            'name'=>'Enders',
            'email'=>'prieto@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $user->assignRole('Estudiante');



    }
}

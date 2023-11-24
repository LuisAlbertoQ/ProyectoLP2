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
            'name'=>'Jenson Chambi',
            'email'=>'Jenson@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $user->assignRole('Supervisor');

        $user=User::create([
            'name'=>'Juan Perez',
            'email'=>'Juan@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $user->assignRole('Estudiante');


        
    }
}

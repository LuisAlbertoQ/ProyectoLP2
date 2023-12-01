<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        //Dashboard
        Permission::create([
            'name'=>'ver dashboard'
        ]);
        //admin
        Permission::create([
            'name'=>'ver usuarios'
        ]);
        Permission::create([
            'name'=>'ver cartapresentacion'
        ]);
        Permission::create([
            'name'=>'ver empresas'
        ]);
        Permission::create([
            'name'=>'ver convocatorias'
        ]);
        Permission::create([
            'name'=>'ver planes'
        ]);
        Permission::create([
            'name'=>'ver estudiantes'
        ]);
        Permission::create([
            'name'=>'ver inducciones'
        ]);
        Permission::create([
            'name'=>'solicitar'
        ]);


        Permission::create([
            'name'=>'ver opciones'
        ]);
         Permission::create([
            'name'=>'ver datos'
        ]);


    }
}

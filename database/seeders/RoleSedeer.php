<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        //luis
        $role=Role::create(['name'=>'Administrador']);
        $role->permissions()->attach([1,2,3,4,5,6,7,8,9,10,11]);
        //neil

        $role=Role::create(['name'=>'Supervisor']);
        $role->syncPermissions(['ver dashboard','ver usuarios','ver empresas','ver convocatorias','ver estudiantes']);
        //enders
        $role=Role::create(['name'=>'Estudiante']);
        $role->syncPermissions(['ver dashboard','ver empresas','ver convocatorias','ver planes','ver cartapresentacion','ver inducciones','solicitar']);
        //hiram
        $role=Role::create(['name'=>'Coordinador']);
        $role->syncPermissions(['ver dashboard','ver usuarios','ver cartapresentacion','ver empresas','ver convocatorias','ver datos','ver inducciones','ver estudiantes','ver opciones']);


    }
}

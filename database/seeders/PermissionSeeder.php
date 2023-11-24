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
            'name'=>'Ver dashboard'
        ]);
        Permission::create([
            'name'=>'Listar PlanPP'
        ]);
        //Supervisor
        Permission::create([
            'name'=>'Listar Estudiante'
        ]);
        Permission::create([
            'name'=>'Crear Estudiantes'
        ]);
        Permission::create([
            'name'=>'Editar Estudiantes'
        ]);
        Permission::create([
            'name'=>'Eliminar Estudiantes'
        ]);
        //Estudiante
        Permission::create([
            'name'=>'Crear PlanPPP'
        ]);
        Permission::create([
            'name'=>'Subir Documento'
        ]);
        Permission::create([
            'name'=>'Eliminar Documentos'
        ]);

        
        
    }
}

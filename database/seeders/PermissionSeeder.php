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
        //Coordinador
        Permission::create([
            'name'=>'Listar PlanPP'
        ]);
        Permission::create([
            'name'=>'Aceptar PlanPP'
        ]);
        Permission::create([
            'name'=>'Crear Empresas'
        ]);
        Permission::create([
            'name'=>'Eliminar Empresas'
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

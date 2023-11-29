<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        Company::create([
            'name' => 'Google',
            'address' => 'Mountain View, California, Estados Unidos',
            'ruc'=>'564654',
            'rubro'=>'servicio web'
        ]);

        Company::create([
            'name' => 'Microsoft',
            'address' => 'Campus de Redmond a 21 km de Seattle',
            'ruc'=>'2512654',
            'rubro'=>'computadoras'
        ]);

        Company::create([
            'name' => 'Coca-Cola',
            'address' => 'Jr. Arequipa 1082, Puno',
            'ruc'=>'8478974',
            'rubro'=>'bebidas'
        ]);

        Company::create([
            'name' => 'Senati',
            'address' => 'Av. Manuel Nuñez Butrón 241',
            'ruc'=>'484864',
            'rubro'=>'educacion'
        ]);

        Company::create([
            'name' => 'SUNAT',
            'address' => 'Jr, 7 de Junio N° 575',
            'ruc'=>'3215154',
            'rubro'=>'proteccion'
        ]);
    }
}

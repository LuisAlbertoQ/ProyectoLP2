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
        ]);
        
        Company::create([
            'name' => 'Microsoft',
            'address' => 'Campus de Redmond a 21 km de Seattle',
        ]);
        
        Company::create([
            'name' => 'Coca-Cola',
            'address' => 'Jr. Arequipa 1082, Puno',
        ]);
        
        Company::create([
            'name' => 'Senati',
            'address' => 'Av. Manuel Nuñez Butrón 241',
        ]);
        
        Company::create([
            'name' => 'SUNAT',
            'address' => 'Jr, 7 de Junio N° 575',
        ]);
    }
}

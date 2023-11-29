<?php

namespace Database\Seeders;

use App\Models\Convocatory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConvocatorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Convocatory::create([
            'inicio'=>'2019-11-01',
            'fin'=>'2025-01-01',
            'descripcion'=>'estas despedido',
            'company_id'=>'2',
        ]);
        Convocatory::create([
            'inicio'=>'2020-12-01',
            'fin'=>'2025-02-01',
            'descripcion'=>'estas despedido',
            'company_id'=>'4',
        ]);
        Convocatory::create([
            'inicio'=>'2023-07-01',
            'fin'=>'2025-03-01',
            'descripcion'=>'estas despedido',
            'company_id'=>'5',
        ]);
        Convocatory::create([
            'inicio'=>'2022-04-01',
            'fin'=>'2025-05-01',
            'descripcion'=>'estas despedido',
            'company_id'=>'1',
        ]);
    }
}

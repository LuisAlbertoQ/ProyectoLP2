<?php

namespace Database\Seeders;

use App\Models\CartaP;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CartaP::create([
            'fecha_solicitud'=>'2021-12-20',
            'estado'=>'1',
            'company_id'=>'3'
        ]);
        CartaP::create([
            'fecha_solicitud'=>'2021-12-20',
            'estado'=>'0',
            'company_id'=>'4'
        ]);
        CartaP::create([
            'fecha_solicitud'=>'2021-12-20',
            'estado'=>'0',
            'company_id'=>'5'
        ]);
        CartaP::create([
            'fecha_solicitud'=>'2021-12-20',
            'estado'=>'1',
            'company_id'=>'1'
        ]);
        CartaP::create([
            'fecha_solicitud'=>'2021-12-20',
            'estado'=>'0',
            'company_id'=>'2'
        ]);
    }
}

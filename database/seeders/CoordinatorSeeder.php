<?php

namespace Database\Seeders;

use App\Models\Coordinator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoordinatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coordinator::create([
            'name'=>'luis',
            'last_name'=>'quilla'

        ]);
        Coordinator::create([
            'name'=>'hiram',
            'last_name'=>'ccoto'

        ]);
        Coordinator::create([
            'name'=>'neil',
            'last_name'=>'camacho'

        ]);
        Coordinator::create([
            'name'=>'ector',
            'last_name'=>'mamani'

        ]);
        Coordinator::create([
            'name'=>'miracle',
            'last_name'=>'edison'

        ]);
        Coordinator::create([
            'name'=>'quilla',
            'last_name'=>'elce'

        ]);
    }
}

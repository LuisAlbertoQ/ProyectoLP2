<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Estudent;
use App\Models\Induction;
use App\Models\Plan;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Primero permisos y roles
        $this->call(PermissionSeeder::class);
        $this->call(RoleSedeer::class);
        //Usuario administrador
        $this->call(UserSeeder::class);
        $this->call(CompanySeeder::class);
        Plan::factory(10)->create();
        Estudent::factory(10)->create();
        Induction::factory(10)->create();
        $this->call(CartaSeeder::class);
        $this->call(ConvocatorySeeder::class);

    }
}

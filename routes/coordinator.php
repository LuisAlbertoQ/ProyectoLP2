<?php

use App\Livewire\Coordinator\CompanyManagement;
use App\Livewire\Coordinator\ListManagement;
use Illuminate\Support\Facades\Route;

Route::get('/companies',CompanyManagement::class)->middleware('can:Crear Empresas')->name('companies');
Route::get('/lists',ListManagement::class)->middleware('can:Listar PlanPP')->name('lists');

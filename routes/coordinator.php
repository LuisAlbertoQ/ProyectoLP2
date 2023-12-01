<?php

use App\Livewire\Coordinator\CartaManagement;
use App\Livewire\Coordinator\CompanyManagement;
use App\Livewire\Coordinator\ConvocatoryManagement;
use App\Livewire\Admin\EstudentManagement;
use App\Livewire\Coordinator\InductionManagement;
use Illuminate\Support\Facades\Route;

Route::get('/companies',CompanyManagement::class)->name('companies');
Route::get('/carta',CartaManagement::class)->name('carta');
Route::get('/estudiantes',EstudentManagement::class)->name('estudiantes');
Route::get('/inducciones',InductionManagement::class)->name('inducciones');

//Route::get('/companies',CompanyManagement::class)->name('companies');

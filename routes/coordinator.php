<?php

use App\Livewire\Coordinator\CartaManagement;
use App\Livewire\Coordinator\CompanyManagement;
use App\Livewire\Coordinator\ConvocatoryManagement;
use Illuminate\Support\Facades\Route;

Route::get('/companies',CompanyManagement::class)->name('companies');
Route::get('/carta',CartaManagement::class)->name('carta');

//Route::get('/companies',CompanyManagement::class)->name('companies');

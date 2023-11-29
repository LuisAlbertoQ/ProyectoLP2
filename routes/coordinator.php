<?php

use App\Livewire\Coordinator\CartaManagement;
use App\Livewire\Coordinator\CompanyManagement;
use Illuminate\Support\Facades\Route;

Route::get('/companies',CompanyManagement::class)->name('companies');
Route::get('/carta',CartaManagement::class)->name('carta');
//Route::get('/companies',CompanyManagement::class)->name('companies');

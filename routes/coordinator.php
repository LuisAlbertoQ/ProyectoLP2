<?php

use App\Livewire\Coordinator\CompanyManagement;
use Illuminate\Support\Facades\Route;

Route::get('/companies',CompanyManagement::class)->name('companies');

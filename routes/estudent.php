<?php

use App\Livewire\Admin\UserManagement;
use App\Livewire\Estudent\PlanManagement;
use Illuminate\Support\Facades\Route;

Route::get('/plans',PlanManagement::class)->middleware('can:Crear PlanPPP')->name('plans');

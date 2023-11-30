<?php

use App\Livewire\Admin\RoleManagement;
use App\Livewire\Admin\UserManagement;
use App\Livewire\Coordinator\ConvocatoryManagement;
use Illuminate\Support\Facades\Route;

Route::get('/users', UserManagement::class)->name('users');
Route::get('/roles', RoleManagement::class)->name('roles');
Route::get('/convocatories',ConvocatoryManagement::class)->name('convocatories');

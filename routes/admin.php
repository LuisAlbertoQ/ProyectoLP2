<?php

use App\Livewire\Admin\RoleManagement;
use App\Livewire\Admin\UserManagement;
use Illuminate\Support\Facades\Route;

Route::get('/users', UserManagement::class)->middleware('can:Ver dashboard')->name('users');
Route::get('/roles', RoleManagement::class)->name('roles');

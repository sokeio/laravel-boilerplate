<?php

use Illuminate\Support\Facades\Route;

Route::resource('permissions', App\Http\Controllers\PermissionController::class);


Route::resource('roles', App\Http\Controllers\RoleController::class);
<?php

use Illuminate\Support\Facades\Route;

Route::resource('permissions', App\Http\Controllers\PermissionController::class);


Route::resource('roles', App\Http\Controllers\RoleController::class);

Route::resource('users', App\Http\Controllers\UserController::class);
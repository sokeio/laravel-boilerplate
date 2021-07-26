<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    App\Http\Controllers\DashboardController::class, 'index'
])->name('dashboard');

Route::resource('permissions', App\Http\Controllers\PermissionController::class);
Route::post('permissions/loadFromRouter', [App\Http\Controllers\PermissionController::class, 'LoadPermission'])->name('permissions.load-router');

Route::resource('roles', App\Http\Controllers\RoleController::class);

Route::get('users/profile', [App\Http\Controllers\UserController::class, 'showProfile'])->name('users.profile');
Route::resource('users', App\Http\Controllers\UserController::class);


Route::resource('attendances', App\Http\Controllers\AttendanceController::class);

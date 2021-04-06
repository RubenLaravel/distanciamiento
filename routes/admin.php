<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\EnterpriseController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\DeviceController;
use App\Http\Controllers\Admin\RoleController;


Route::resource('users', UserController::class)->only(['index','edit','update','destroy'])->middleware('can:admin.users')->names('admin.users');

Route::resource('roles', RoleController::class)->middleware('can:admin.roles')->names('admin.roles');

Route::resource('enterprises', EnterpriseController::class)->except('show')->middleware('can:admin.enterprises')->names('admin.enterprises');

Route::resource('employees', EmployeeController::class)->except('show')->middleware('can:admin.employees')->names('admin.employees');

Route::resource('devices', DeviceController::class)->except('show')->middleware('can:admin.devices')->names('admin.devices');
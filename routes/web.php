<?php

use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\CoreUserController;
use App\Http\Controllers\HealthAdminController;
use App\Http\Controllers\HealthcareProviderController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PharmacistController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\PharmacistOrderController;
use App\Http\Controllers\SecureMessagingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserTypeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Group resource routes for controllers
// Route::prefix('/api/v1')->group(function () {
  
//     Route::resource('core_users', CoreUserController::class);
//     Route::resource('health_admins', HealthAdminController::class);
//     Route::resource('healthcare_providers', HealthcareProviderController::class);
//     Route::resource('patients', PatientController::class);
//     Route::resource('pharmacists', PharmacistController::class);
//     Route::resource('appointments', AppointmentController::class);
//     Route::resource('prescriptions', PrescriptionController::class);
//     Route::resource('pharmacist_orders', PharmacistOrderController::class);
//     Route::resource('secure_messages', SecureMessagingController::class);
//     Route::resource('messages', MessageController::class);
//     Route::resource('user_types', UserTypeController::class);
// });
Route::prefix('/api/v1')->group(function () {
  
    Route::get('core_users/list', [CoreUserController::class, 'index']);
    Route::post('core_users/create', [CoreUserController::class, 'store']);
    Route::get('core_users/view/{core_user}', [CoreUserController::class, 'show']);
    Route::put('core_users/update/{core_user}', [CoreUserController::class, 'update']);
    Route::delete('core_users/delete/{core_user}', [CoreUserController::class, 'destroy']);
  
    // Define similar routes for other resources...
  
});
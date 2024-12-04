<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\PrescriptionController;

 /*
 |---------------------------------------------------------------------------
 | Web Routes
 |---------------------------------------------------------------------------
 |
 | Here is where you can register web routes for your application. These
 | routes are loaded by the RouteServiceProvider and all of them will
 | be assigned to the "web" middleware group. Make something great!
 |
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('patients', PatientController::class);

Route::resource('doctors', DoctorController::class);

Route::resource('polis', PoliController::class);

Route::resource('medicines', MedicineController::class);

Route::resource('medical_records', MedicalRecordController::class);

Route::resource('prescriptions', PrescriptionController::class);

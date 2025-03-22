<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\DataTables;
use App\Models\Employee;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Change this line to make employee the index page
Route::get('/', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');

Route::post('/employee', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/{employee}/edit', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{employee}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employee/{employee}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee.destroy');
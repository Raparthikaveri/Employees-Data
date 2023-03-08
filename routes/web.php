<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeData;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/employees', [EmployeeData::class, 'get_employees'])->name('employees');
Route::get('/add_employee', [EmployeeData::class, 'add_employee'])->name('add_employee');
Route::get('/edit_employee/{id}', [EmployeeData::class, 'edit_employee'])->name('edit_employee');
Route::post('/save_employees', [EmployeeData::class, 'save_employees'])->name('save_employees');
Route::post('/update_employee/{id}', [EmployeeData::class, 'update_employee'])->name('update_employee');
Route::get('/delete_employee/{id}', [EmployeeData::class, 'delete_employee'])->name('delete_employee');

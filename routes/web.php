<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcoController;
use App\Http\Controllers\DepartmentController;

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
})->name('home');

Route::get('/dashboard', function () {
    return view('dash.dashboard');
})->name('dashboard');
# ROUTES FOR DEPARTMENTS
Route::middleware()->group(function () {
    Route::get('/departments', [DepartmentController::class, 'index'])->name('departments');
    Route::get('/departments/create', [DepartmentController::class, 'create'])->name('create-department');
    Route::post('/departments/store', [DepartmentController::class, 'store'])->name('store-department');
    Route::patch('/departments/{departmentId}/update', [DepartmentController::class, 'update'])->name('update-department');
    Route::delete('/departments/{departmentId}/delete', [DepartmentController::class, 'destroy'])->name('delete-department');
});

Route::middleware()->group(function () {
    Route::get('/excos', [ExcoController::class, 'index'])->name('excos');
    Route::post('/excos/store', [ExcoController::class, 'store'])->name('store-exco');
    Route::patch('/excos/{excoId}/update', [ExcoController::class, 'update'])->name('update-excos');
    Route::delete('/excos/{excoId}/delete', [ExcoController::class, 'destroy'])->name('delete-excos');
});

require __DIR__ . '/auth.php';

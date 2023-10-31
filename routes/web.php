<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

//Rutas del crud
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('project.store');
Route::get('/projects/project/{id}', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('/projects/project/{id}', [ProjectController::class, 'update'])->name('project.update');
Route::delete('/projects/id', [ProjectController::class, 'destroy'])->name('project.destroy');

//Rutas para ver:
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/projects/pdf/{id}', [PDFController::class, 'imprimirPDF'])->name('pdf.show');
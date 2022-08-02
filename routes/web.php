<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth;
use App\Http\Controllers\contractorsController;
use App\Http\Controllers\contractorWorkController;
use App\Http\Controllers\adminProfileController;


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
    return view('Auth/index');
});

Route::get('/login',[auth::class,'login']);
Route::get('/Dashboard1',[auth::class,'Dashboard'])->name('Dashboard1');
Route::post('/Dashboard',[auth::class,'loginadmin'])->name('Dashboard');
Route::get('/registration',[auth::class,'registration']);
Route::post('/register-admin',[auth::class,'registeradmin'])->name('register-admin');

Route::get('/contractors',[contractorsController::class,'contractors'])->name('contractors');
Route::get('/addcontractor',[contractorsController::class,'addcontractor'])->name('addcontractor');
Route::post('/add-contractor',[contractorsController::class,'addingcontractor'])->name('add-contractor');
Route::get('/updateContractor/{id}',[contractorsController::class,'updateContractor'])->name('updateContractor');
Route::post('/updatingContractor',[contractorsController::class,'updatingContractor']);

Route::get('/contractorWork',[contractorWorkController::class,'contractorWork'])->name('contractorWork');
Route::get('/addWork',[contractorWorkController::class,'addWork'])->name('addWork');
Route::post('/add-work',[contractorWorkController::class,'addingwork'])->name('add-work');
Route::get('/updateWork/{id}',[contractorWorkController::class,'updateWork'])->name('updateWork');
Route::post('/updatingWork',[contractorWorkController::class,'updatingWork']);
Route::get('/delete/{id}',[contractorWorkController::class,'delete'])->name('delete');


Route::get('/adminProfile',[adminProfileController::class, 'adminProfile'])->name('adminProfile');

Route::get('/logout',[auth::class,'logout'])->name('logout');
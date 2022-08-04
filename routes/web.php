<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\ContractorsController;
use App\Http\Controllers\ContractorWorkController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\DashboardController;



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

Route::get('/login',[Auth::class,'login']);
Route::get('/home',[Auth::class,'home']);
Route::post('/homeadmin',[Auth::class,'loginadmin']);
Route::get('/registration',[Auth::class,'registration']);
Route::post('/register-admin',[Auth::class,'registeradmin'])->name('register-admin');

Route::get('/contractors',[ContractorsController::class,'contractors'])->name('contractors');
Route::get('/addcontractor',[ContractorsController::class,'addcontractor'])->name('addcontractor');
Route::post('/add-contractor',[ContractorsController::class,'addingcontractor'])->name('add-contractor');
Route::get('/updateContractor/{id}',[ContractorsController::class,'updateContractor'])->name('updateContractor');
Route::post('/updatingContractor',[ContractorsController::class,'updatingContractor']);
Route::get('/viewContractorWork/{CompanyName}',[ContractorsController::class,'viewContractorWork']);

Route::get('/contractorWork',[ContractorWorkController::class,'contractorWork'])->name('contractorWork');
Route::get('/addWork',[ContractorWorkController::class,'addWork'])->name('addWork');
Route::post('/add-work',[ContractorWorkController::class,'addingwork'])->name('add-work');
Route::get('/updateWork/{id}',[ContractorWorkController::class,'updateWork'])->name('updateWork');
Route::post('/updatingWork',[ContractorWorkController::class,'updatingWork']);
Route::get('/delete/{id}',[ContractorWorkController::class,'delete'])->name('delete');


Route::get('/adminProfile',[AdminProfileController::class, 'adminProfile'])->name('adminProfile');
Route::get('/Dashboard1',[DashboardController::class,'Dashboard'])->name('Dashboard1');

Route::get('/logout',[Auth::class,'logout'])->name('logout');
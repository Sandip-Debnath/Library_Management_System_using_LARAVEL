<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\addbooksController;
use App\Http\Controllers\requestbooksController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\studentsearchController;
use App\Http\Controllers\studentdashboardController;
use App\Http\Controllers\requestdetailsadminController;
use App\Models\bookdb;
use Illuminate\Http\Request;
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


Route::get('/',[LoginController::class,'index']);
Route::get('/view1',[LoginController::class,'displaybooks'])->name('dashboard');
Route::post('/',[LoginController::class,'login']);

Route::get('/requestbox',[requestdetailsadminController::class,'index']);

Route::get('/requestbox/search',[requestbooksController::class,'index']);
Route::get('/requestbox/search',[requestbooksController::class,'requestbox']);
Route::get('/requestbox/search/{id}/{bookid}',[requestbooksController::class,'requestissue'])->name('issuereq');
Route::get('/requestbox/search/{id}',[requestbooksController::class,'requestdel'])->name('delreq');

Route::get('/studentdashboard',[studentdashboardController::class,'index'])->name('dashboard3');

Route::get('/reg',[RegController::class,'index']);
Route::post('/reg',[RegController::class,'register']);
Route::post('/view2',[RegController::class,'store']);

Route::get('/addbooks/create',[addbooksController::class,'create'])->name('add.item');
Route::post('/addbooks/create',[addbooksController::class,'store']);

Route::get('/searchbooks/search',[searchController::class,'index'])->name('search.item');
Route::get('/searchbooks/search',[searchController::class,'searchbooks'])->name('dashboard2');

Route::get('/studentsearch',[studentsearchController::class,'index']);
Route::get('/studentsearch',[studentsearchController::class,'searchbooks']);
Route::get('/studentsearch/{id}',[studentsearchController::class,'request'])->name('request.item');

Route::get('/view1/delete/{id}',[addbooksController::class,'delete'])->name('delete.item');
Route::get('/addbooks/edit/{id}',[addbooksController::class,'edit'])->name('edit.item');
Route::post('/addbooks/update/{id}',[addbooksController::class,'update'])->name('update.item');


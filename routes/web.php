<?php

use App\Http\Controllers\FirebaseController;
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

    Route::get('/avis',[FirebaseController::class,'showAvis'])->name("showAvis");
    Route::get('/avisUpdate',[FirebaseController::class,'updateAvis'])->name("AvisUpadte");
    //Route::get('/avis',[FirebaseController::class,'show'])->name("showAvis");
    Route::post('/InsertAvis',[FirebaseController::class,'insertAvis'])->name("InsertAvis");
    Route::post('/InsertNote',[FirebaseController::class,'insertNote'])->name("InsertNote");
    Route::post('/insertStudent',[FirebaseController::class,'insertStudent'])->name("insertStudent");
    Route::view('/emploie',"emploie")->name('emploie');
    Route::post("/uploadFile",[FirebaseController::class,"insertEmplois"])->name('uploadFile');
    //Route::view('/note',"note");
    Route::get("/note",[FirebaseController::class,"showStudent"])->name("note");
    Route::get("/",[FirebaseController::class,"showStudentHome"])->name("home");
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/', [FirebaseController::class, 'home'])->name('home');



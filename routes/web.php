<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ElecteurController;
use App\Http\Controllers\ProgrammeController;
use App\Models\Electeur;

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
    return view('login');
});
Route::group(['middleware' => 'guest'], function (){
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/register',[AuthController::class, 'registerPost'])->name('register');
    Route::get('/login',[AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});   

Route::get('/candidat/create', [CandidatController::class,'create']) ->name('Candidat.create');
Route::post('/candidat/store', [CandidatController::class,'store']) ->name('liste-Candidat');
Route::get('/electeur/create', [ElecteurController::class,'create']) ->name('Electeur.create');
Route::post('/electeur/store', [ElecteurController::class,'store']) ->name('liste-electeur');
Route::get('/liste-candidat',[CandidatController::class,'indexCan']) ->name('liste-candidat');
Route::get('/liste-electeur',[ElecteurController::class,'indexElec']) ->name('liste-electeur');
Route::get('/liste-programme',[ProgrammeController::class,'indexPro']) ->name('liste-programmes');
Route::get('/programme/create', [ProgrammeController::class,'create']) ->name('Programme.create');
Route::post('/programme/store', [ProgrammeController::class,'store']) ->name('liste-programme');
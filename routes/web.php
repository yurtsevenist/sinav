<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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

//OTURUM AÇMADAN ERİŞİLEBİLECEK ALANLAR
Route::get('/', function () {
    return view('login');
})->name('/');
Route::get('register', function () {
    return view('register');
})->name('register');

Route::post('loginPost',[Controller::class,'loginPost'])->name('loginPost');
//OTURUM AÇMADAN ERİŞİLEBİLECEK ALANLARIN SONU

//OTURUM AÇARAK ERİŞİLEBİLECEK ALANLAR
Route::group(['middleware'=>['auth','verified']],function()
{
    //Yönetici Routes
    Route::get('home',[Controller::class,'home'])->name('home');   
    Route::get('books',[Controller::class,'books'])->name('books');
    Route::get('users',[Controller::class,'users'])->name('users');
    Route::get('addbook',[Controller::class,'addbook'])->name('addbook');

    //Kullanıcı Routes
    Route::get('homeuser',[Controller::class,'homeuser'])->name('homeuser');
    Route::get('userbooks',[Controller::class,'userbooks'])->name('userbooks');
    Route::get('mybooks',[Controller::class,'mybooks'])->name('mybooks');

    //Ortak Routes
    Route::get('profil',[Controller::class,'profil'])->name('profil');
});

//OTURUM AÇARAK ERİŞİLEBİLECEK ALANLARIN SONU

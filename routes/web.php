<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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
// callback function
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function (){
    return "Hello World";
 });


 Route::get('/home',function (){
    return view('home');
  });
  
 Route::get('/detail/{nama}',function ($nama){
 
    return view('detail',compact('nama'));
  });

  // Route :: metode (URL,[NamaController::class,'fungsi'])
Route::get('registrasi', [RegistrationController::class,'index']);
// post
Route::post('/register', [RegistrationController::class,'register'])->name('register');


/*
    Guest Controller
*/
Route::get('/guest/list',[GuestController::class,'index'])->name('guest.list');

Route::get('/guest/create',[GuestController::class,'create'])->name('guest.create');

Route::post('/guest/store',[GuestController::class,'store'])->name('guest.store');

Route::get('/guest/edit/{id}',[GuestController::class,'edit'])->name('guest.edit');

Route::post('/guest/update/{id}',[GuestController::class,'update'])
->name('guest.update');

Route::delete('/guest/delete/{id}',[GuestController::class,'delete'])
->name('guest.delete');

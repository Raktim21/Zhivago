<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRegisterController;
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


Route::get('/', function () {
    return view('auth.login');
});




// User Group Route
Route::group(['middleware' => ['auth']], function(){

   Route::get('dashboard',[UserController::class , 'dashboard'])->name('user.dashboard');

});

// Route::post('/user/register' , [UserRegisterController::class , 'register'])->name('user.register');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('user.dashboard');
   
// })->name('dashboard');

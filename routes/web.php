<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CoustmorDetailController;
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
Route::get('/login', function () {
    return view('frontend.log-in');
    });

Route::get('/', function () {
        return view('home');
        


// Route::get('/', function () {
//     return view('frontend.layouts-without-navbar');
    
});

Route::post('/booking',[BookingController::class, 'booking']);
Route::post('/register',[CoustmorDetailController::class, 'register']);
Route::post('/dashbord',[DashboardController::class, 'dashbord']);

Route::view('/driver','frontend.driverdashboard');
Route::view('/register','frontend.registar');
Route::view('/login','frontend.log-in');
Route::view('frontend.registar', 'frontend.registar');



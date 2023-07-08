<?php

use App\Http\Controllers\LocalizationController;
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

Route::get('/', function () {
    return view('main.home');
});

Route::get('/contactus', function () {
    return view('/main/contactus');
});
// Route::get('/tes', function () {
//     return view('/main/tes');
// });

Route::get('/aboutus', function () {
    return view('/main/aboutus');
});


Route::get('/pricing', function () {
    return view('/main/pricing');
});

Route::get("{lang}", [LocalizationController::class, 'setLanguage']);

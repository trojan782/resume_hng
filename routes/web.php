<?php

use App\Http\Controllers\FormController;
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
    return view('Home');
})->name('cv');

Route::get('/form', [FormController::class, 'form'])->name('contact');
// Route::post('/form', [FormController::class, 'contactForm'])->name('contact.store');
Route::post('/send_message', [FormController::class, 'contactForm'])->name('contact.send');

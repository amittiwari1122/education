<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Mail;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebsiteController::class, 'home']);
Route::get('/about', [WebsiteController::class, 'about']);
Route::get('/course', [WebsiteController::class, 'course']);
Route::get('/courseDetails/:id', [WebsiteController::class, 'courseDetails']);
Route::get('/instructor', [WebsiteController::class, 'instructor']);
Route::get('/testimonial', [WebsiteController::class, 'testimonial']);
Route::get('/feature', [WebsiteController::class, 'feature']);
Route::get('/contact', [WebsiteController::class, 'contact']);

Route::post('/sendEmail', [WebsiteController::class, 'sendEmail']);

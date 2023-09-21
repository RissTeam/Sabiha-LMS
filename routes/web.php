<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


// path for homepage
route::get('/',[HomeController::class,'index']);



// path for courses
route::get('/courses',[HomeController::class,'courses']);

// path for FAQ_page
route::get('/FAQ_page',[HomeController::class,'FAQ_page']);

// path for about_sabiha_page
route::get('/about_sabiha_page',[HomeController::class,'about_sabiha_page']);


// path for contact_us_page
route::get('/contact_us_page',[HomeController::class,'contact_us_page']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// route for redirect admin to new dashboard
route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');



// Homapage Routing
// path  for course_overview_page 
route::get('/course_overview_page/{id}',[HomeController::class,'course_overview_page']);


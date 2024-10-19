<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // HTML PAGE
    return view('welcome');
});

// Using controller approach
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/contacts', [ContactController::class, 'contacts']);

// show the registration page
Route::get('/registration', [RegistrationController::class, 'index']);

// show the login page
Route::get('/signin', [AuthController::class, 'index'])->name('login');



// POST METHOD IS USE TO SEND DATA TO THE DATABASE

// to send the data and create account for the user
Route::post('/save-contact', [ContactController::class, 'store']);

// to send the data and create account for the user
Route::post('/register', [RegistrationController::class, 'store'])
->name('register');

// to send the data and login the user
Route::post('/login', [AuthController::class, 'login']);

// Middleware blocks a user that is not logged in
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});





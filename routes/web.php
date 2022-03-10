<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;

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


//USERS ROUTES
Route::get('/users', 
    [UsersController::class, 'index']
);

Route::get('/users/create', 
    [UsersController::class, 'create']
);

Route::post('/users/store', 
    [UsersController::class, 'store']
);

Route::post('/users/login', 
    [UsersController::class, 'login']
);

Route::post('/users/register', 
    [UsersController::class, 'register']
);



//PAGES ROUTES
Route::get('/login', 
    [PagesController::class, 'login']
);

Route::get('/register', 
    [PagesController::class, 'register']
);

Route::get('/', 
    [PagesController::class, 'homepage']
);



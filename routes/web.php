<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
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

Route::get('/home', [homeController::class, 'index'] 
);
Route::get('/fitur', [homeController::class, 'fitur'] 
);
Route::get('/download',[homeController::class, 'download'] 
);
Route::get('/signup',[homeController::class, 'signup'] 
);
Route::get('/signin',[homeController::class, 'signin'] 
);
Route::get('/history',[homeController::class, 'history'] 
);
Route::get('/dashboard',[homeController::class, 'dashboard'] 
);
Route::get('/profile',[homeController::class, 'profile'] 
);




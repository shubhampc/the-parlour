<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Admin\DashboardController;

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
    return view('welcome');
})->name('home');
Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('admin.dashboardnew');
Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware' => ['auth:sanctum', 'verified']],function(){
    Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
    });

<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/home', [HomeController::class, "index"])->name('home');
Route::get('/shop', [HomeController::class, "shop"])->name('shop');
Route::get('/single', [HomeController::class, "single"])->name('single');
 





Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified'
])->group(function () {
Route::get('/dashboard',  [AdminController::class, "index"])->name('dashboard');
Route::get('/add-category',  [AdminController::class, "addCategory"])->name('add.category');
Route::post('/store-category',  [AdminController::class, "store"])->name('store.category');
});
  
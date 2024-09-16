<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductController;

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



Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('connexion', [AuthController::class, 'connexion'])->name('connexion');
Route::post('connexion', [AuthController::class, 'connexionForm'])->name('connexionForm');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login',[AuthController::class, 'loginForm'])->name('loginForm');
Route::post('logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/aboutus', [MenuController::class, 'aboutus'])->name('aboutus');
Route::get('/products', [MenuController::class, 'products'])->name('products');
Route::get('perles', [MenuController::class, 'pearl'])->name('pearl');
Route::get('/unproduit/{id}', [MenuController::class, 'singleprod'])->name('singleproduct');
Route::get('contact', [MenuController::class, 'contact'])->name('contact');
Route::get('fils', [MenuController::class, 'fil'])->name('fil');

Route::middleware(['auth', 'role:admin'])->group(function() {
    Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');
});



 Route::get('panier', [PanierController::class, 'index'])->name('panier');
 Route::get('/panier/add{id}', [PanierController::class, 'addpanier'])->name('addpanier');
 Route::get('/panier/delete/{id}', [PanierController::class, 'deletepanier'])->name('deletepanier');

 Route::resource('products', ProductController::class);

<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TesteController;
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

/* Route::get('/', function () {
    return 'Index Page';
}); */


Route::get('/', [HomeController::class, 'index'])->name('site.index');

Route::get('/contact', [ContactController::class, 'index'])->name('site.contact');

Route::post('/contact', [ContactController::class, 'index'])->name('site.contact');

Route::get('/about', [AboutController::class, 'index'])->name('site.about');

Route::get('/login', function(){
    return 'login';
});



Route::prefix('/app')->group(function(){
    Route::get('/clients', function(){
        return 'clients';
    })->name('app.clients');
    Route::get('/suppliers', [SupplierController::class, 'index'])->name('app.suppliers');
    Route::get('/products', function(){
        return 'app.products';
    });
});

Route::get('/testeroute/{p1}/{p2}', [TesteController::class, 'index'])->name('teste');

Route::fallback(function(){
    echo 'Endereço inexistente. Clique <a href="'.route('site.index').'">aqui</a> para retornar a página inicial!';
});

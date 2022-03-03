<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/about', [AboutController::class, 'index'])->name('site.about');

Route::get('/login', function(){
    return 'login';
});



Route::prefix('/app')->group(function(){
    Route::get('/clients', function(){
        return 'clients';
    })->name('app.clients');
    Route::get('/suppliers', function(){
        return 'suppliers';
    })->name('app.suppliers');
    Route::get('/products', function(){
        return 'app.products';
    });
});

Route::get('/route1', function() {
    echo 'Route 1';

})->name('site.route1');

Route::get('/route2', function() {
    return redirect()->route('site.route1');
})->name('site.route2');

//Route::redirect('/route2', '/route1');

Route::fallback(function(){
    echo 'Endereço inexistente. Clique <a href="'.route('site.index').'">aqui</a> para retornar a página inicial!';
});

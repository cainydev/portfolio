<?php

use App\Livewire\Fullpage\Home;
use App\Livewire\Fullpage\Imprint;
use App\Livewire\Fullpage\Portfolio;
use App\Livewire\Fullpage\Pricing;
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

Route::get('/', Home::class)
    ->name('home');

Route::get('/angebot', Pricing::class)
    ->name('pricing');

Route::get('/portfolio', Portfolio::class)
    ->name('portfolio');

Route::get('/impressum', Imprint::class)
    ->name('imprint');

Route::get('/sitemap', function() {
    $sitemap = file_get_contents(resource_path('sitemap.xml'));
    return response($sitemap, 200, ['Content-Type' => 'application/xml']);
});

/*Route::get('/ueber-uns', function () {
    return view('home');
})->name('about');*/

/*Route::get('/blog', function () {
    return view('home');
})->name('blog');*/

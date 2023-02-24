<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

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

Route::get('/home', function () {
    return 'Halaman Home';
});

Route::prefix('/product')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return 'Menampilkan Game marbel-edu-games';
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return 'Menampilkan Game marbel-and-friends-kids-games';
    });
    Route::get('/riri-story-books-animations', function () {
        return 'Menampilkan Game riri-story-books-animations';
    });
    Route::get('/kolak-kids-songs', function () {
        return 'Menampilkan Game kolak-kids-songs';
    });
});

Route::get('/news/{title?}', function ($title = null) {
    return $title;
});

Route::prefix('/program')->group(function () {
    Route::get('/karir', function () {
        return 'Menampilkan Program Karir';
    });
    Route::get('/magang', function () {
        return 'Menampilkan Program Magang';
    });
    Route::get('/kunjungan-industri', function () {
        return 'Menampilkan Program kunjungan industri';
    });
});

Route::get('/about-us', function () {
    return redirect('Menampilkan About Us');
});


Route::resource('/contact-us', ContactUsController::class)->only('index');
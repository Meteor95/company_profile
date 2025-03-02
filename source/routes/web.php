<?php

use App\Http\Controllers\EndUser\Landing;
use Illuminate\Support\Facades\Route;

Route::get('/', [Landing::class, "index"])->name('web.halaman_depan');
Route::group(['prefix' => 'layanan'], function () {
    Route::get('email-profesional', [Landing::class, "email_profesional"])->name('layanan.email');
});
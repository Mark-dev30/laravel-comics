<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $menu = [
        'characters' => '/characters',
        'comics' => '/',
        'movies' => '/movies',
        'tv' => '/tv',
        'games' => '/games',
        'collectibles' => '/collectibles',
        'videos' => '/videos',
        'fans' => '/fans',
        'news' => '/news',
        'shop' => '/shop'
    ];
    $comics = config('comics');

    return view('comics', compact('menu', 'comics'));
})->name('comics');

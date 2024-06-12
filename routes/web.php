<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-ots', function () {
    return view('pages.about-ots');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/why-us', function () {
    return view('pages.why-us');
});

Route::get('/careers', function () {
    return view('pages.careers');
});

Route::get('/prototypes', function () {
    return view('pages.prototypes');
});

Route::get('/artificial-intelligence-and-machine-learning', function () {
    return view('pages.artificial-intelligence-and-machine-learning');
});
Route::get('/augmented-reality', function () {
    return view('pages.augmented-reality');
});
Route::get('/Block-Chain-Development', function () {
    return view('pages.Block-Chain-Development');
});
Route::get('/cloud-solutions', function () {
    return view('pages.cloud-solutions');
});
Route::get('/digital-marketing-services', function () {
    return view('pages.digital-marketing-services');
});
Route::get('/seo-packages', function () {
    return view('pages.seo-packages');
});
Route::get('/seo-search-engine-optimization', function () {
    return view('pages.seo-search-engine-optimization');
});

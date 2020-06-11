<?php

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
    return view('home');
});

Route::get('/category/international-law', function () {
    return view('international-law');
});

Route::get('/category/drug-trafficking-law', function () {
    return view('drug-trafficking-law');
});

Route::get('/category/personal-injury-law', function () {
    return view('personal-injury-law');
});

Route::get('/category/animal-law', function () {
    return view('animal-law');
});

Route::get('/what-is-fraud', function () {
    return view('fraud');
});

Route::get('/how-to-fight-federal-drug-trafficking-charges', function () {
    return view('drug');
});

Route::get('/top-8-things-avoid-real-estate-agent-choose-list-home', function () {
    return view('top-8-things');
});

Route::get('/serious-animal-cruelty-crimes-act-nsw', function () {
    return view('animal-law1');
});

Route::get('/act-ban-factory-farming-will-enforced', function () {
    return view('animal-law2');
});

Route::get('/2020/04', function () {
    return view('april');
});

Route::get('/2020/02', function () {
    return view('february');
});

Route::get('/2017/10', function () {
    return view('october');
});

Route::get('/2017/09', function () {
    return view('september');
});





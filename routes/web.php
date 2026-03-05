<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.index');
})->name('index');
Route::get('/upcoming-match', function () {
    return view('frontend.pages.upcoming-match');
})->name('upcoming-match');
Route::get('/match-result', function () {
    return view('frontend.pages.match-result');
})->name('match-result');
Route::get('/match-details', function () {
    return view('frontend.pages.match-details');
})->name('match-details');
Route::get('/teams', function () {
    return view('frontend.pages.teams');
})->name('teams');

Route::get('/team-details', function () {
    return view('frontend.pages.team-details');
})->name('team-details');

Route::get('/staff-details', function () {
    return view('frontend.pages.staff-details');
})->name('staff-details');

Route::get('/point-table', function () {
    return view('frontend.pages.point-table');
})->name('point-table');

Route::get('/news', function () {
    return view('frontend.pages.news');
})->name('news');

Route::get('/news-details', function () {
    return view('frontend.pages.news-details');
})->name('news-details');

Route::get('/fixtures', function () {
    return view('frontend.pages.fixtures');
})->name('fixtures');

Route::get('/contact-us', function () {
    return view('frontend.pages.contact-us');
})->name('contact-us');
Route::get('/videos', function () {
    return view('frontend.pages.videos');
})->name('videos');
Route::get('/photos', function () {
    return view('frontend.pages.photos');
})->name('photos');
Route::get('/about-us', function () {
    return view('frontend.pages.about-us');
})->name('about-us');

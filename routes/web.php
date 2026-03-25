<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// fetch controllers 
use App\Http\Controllers\LeadController;

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
Route::get('/our-team', function () {
    return view('frontend.pages.teams');
})->name('our-team');

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

Route::get('/announcement', function () {
    return view('frontend.pages.announcement');
})->name('announcement');
Route::get('/gallery', function () {
    return view('frontend.pages.gallery');
})->name('gallery');
Route::get('/privacy-policy', function () {
    return view('frontend.pages.privacy-policy');
})->name('privacy-policy');
Route::get('/terms-condition', function () {
    return view('frontend.pages.terms-condition');
})->name('terms-condition');
Route::get('/selection-process', function () {
    return view('frontend.pages.selection-process');
})->name('selection-process');
Route::get('/required-documents', function () {
    return view('frontend.pages.required-documents');
})->name('required-documents');
Route::get('/our-organizer', function () {
    return view('frontend.pages.organizer');
})->name('our-organizer');
Route::get('/sport-details', function () {
    return view('frontend.pages.sport-details');
})->name('sport-details');
Route::get('/athletics', function () {
    return view('frontend.pages.athletics');
})->name('athletics');
Route::get('/football', function () {
    return view('frontend.pages.football');
})->name('football');

Route::get('/auction-of-player', function () {
    return view('frontend.pages.auction-of-player');
})->name('auction-of-player');
Route::get('/membership', function () {
    return view('frontend.pages.membership-vip-access');
})->name('membership-vip-access');
Route::get('/nodal-registration', function () {
    return view('frontend.pages.nodal-registeration');
})->name('nodal-registration');
Route::get('/player-registration', function () {
    return view('frontend.pages.player-registration');
})->name('player-registration');
Route::get('/total-players-registration', function () {
    return view('frontend.pages.total-player-registration');
})->name('total-player-registration');
Route::get('/jsl-influencer', function () {
    return view('frontend.pages.jsl-influencer');
})->name('jsl-influencer');
Route::get('/become-sponsor', function () {
    return view('frontend.pages.become-sponsor');
})->name('become-sponsor');
Route::get('/brand-promotion', function () {
    return view('frontend.pages.brand-promotion');
})->name('brand-promotion');
Route::get('/shop', function () {
    return view('frontend.pages.shop');
})->name('shop');
Route::get('/book-trial', function () {
    return view('frontend.pages.book-trial');
})->name('book-trial');


Route::post('/store', [LeadController::class, 'store'])->name('contact-us.store');
Route::post('/test', function () {
    dd(request()->all());
});

// HERE ARE THE ADMIN PANEL ROUTES KINDLY WRITE THERE ONLY
Route::get('/dashboard', function () {
    return view('admin.views.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    

    // contact leads
    Route::get('/admin-contact-leads', function () {
        return view('admin.views.admin-leads');
    })->name('admin-contact-leads');
    // admin blogs
    Route::get('/admin-blogs', function () {
        return view('admin.views.admin-blogs');
    })->name('admin-blogs');
    // setting page
    Route::get('/admin-settings', function () {
        return view('admin.views.setting');
    })->name('admin-setting');
    // profile CRUD
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
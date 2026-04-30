<?php

use Illuminate\Support\Facades\Route;
// ************************************************************************************
// ************************************************************************************
// fetch controllers 
// ************************************************************************************
// ************************************************************************************
use App\Http\Controllers\LeadController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\NodalRegisterationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookATrialController;
use App\Http\Controllers\PlayerRegistrationController;
use App\Http\Controllers\MembershipAccessController;
use App\Http\Controllers\InfluencerController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\HomeAboutSectionController;
use App\Http\Controllers\HomeWorkSectionController;
use App\Http\Controllers\HomeBenefitController;
use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\AboutValueController;
use App\Http\Controllers\OrganizerAboutSectionController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\RequiredDocumentController;
use App\Http\Controllers\SelectionProcessController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\WebsiteSettingController;
use App\Http\Controllers\SocialSettingController;
use App\Http\Controllers\ColourSettingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameMatchController;
use App\Http\Controllers\AuctionController;
// ************************************************************************************
// ************************************************************************************
// UI ROUTES
// ************************************************************************************
// ************************************************************************************
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
Route::get('/our-blogs', function () {
    return view('frontend.pages.news');
})->name('news');
Route::get('/news-details/{slug}', function ($slug) {
    $blog = \App\Models\Blog::where('slug', $slug)->firstOrFail();
    return view('frontend.pages.news-details', compact('blog'));
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

Route::get('/event-categories', function () {
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
Route::get('/sport-details/{slug}', function ($slug) {
    $sport = App\Models\Sport::where('slug', $slug)->first();

    return view('frontend.pages.sport-details', compact('sport'));
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





// ************************************************************************************
// ************************************************************************************
// HERE ARE ALL THE FORM SUBMISSION ROUTES KINDLY WRITE THERE ONLY
// ************************************************************************************
// ************************************************************************************



Route::post('/store', [LeadController::class, 'store'])->name('contact-us.store');
Route::post('/nodal-registration', [NodalRegisterationController::class, 'store'])->name('nodal-registration.store');
Route::post('/book-trial-registration', [BookATrialController::class, 'store'])->name('book-trial-registration.store');
Route::post('/player-registration', [PlayerRegistrationController::class, 'store'])->name('player-registration.store');
Route::post('/membership-vip-access', [MembershipAccessController::class, 'store'])->name('membership-vip-access.store');
Route::post('/jsl-influencer', [InfluencerController::class, 'store'])->name('jsl-influencer.store');
Route::post('/become-sponsor', [SponsorController::class, 'store'])->name('become-sponsor.store');




// ************************************************************************************
// ************************************************************************************
// HERE ARE THE ADMIN PANEL ROUTES KINDLY WRITE THERE ONLY
// ************************************************************************************
// ************************************************************************************



Route::get('/dashboard', function () {
    $totalLeads = App\Models\Lead::count();
    $blogs = App\Models\Blog::count();
    $totalOrgainzer = App\Models\Organizer::count();
    $totalReview = App\Models\Review::count();
    $totalSports = App\Models\Sport::count();

    $EventCategory = App\Models\EventCategory::where('status', 'active')->latest()->take(5)->get();
    $team = App\Models\Team::where('status', 'active')->latest()->take(5)->get();
    $partner = App\Models\Partner::where('status', 'active')->latest()->take(5)->get();

    $bookingLeads = App\Models\BookATrial::count();
    $contactLeads = App\Models\Lead::count();
    $influencerLeads = App\Models\Influencer::count();
    $membershipLeads = App\Models\MembershipAccess::count();
    $nodalLeads = App\Models\NodalRegisteration::count();
    $playerLeads = App\Models\PlayerRegistration::count();
    $sponsorLeads = App\Models\Sponsor::count();


    return view('admin.views.dashboard', [
        'totalLeads' => $totalLeads,
        'blogs' => $blogs,
        'totalOrgainzer' => $totalOrgainzer,
        'totalReview' => $totalReview,
        'totalSports' => $totalSports,
        'EventCategory' => $EventCategory,
        'team' => $team,
        'partner' => $partner,
        'bookingLeads' => $bookingLeads,
        'contactLeads' => $contactLeads,
        'influencerLeads' => $influencerLeads,
        'membershipLeads' => $membershipLeads,
        'nodalLeads' => $nodalLeads,
        'playerLeads' => $playerLeads,
        'sponsorLeads' => $sponsorLeads,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // setting page
    Route::get('/admin-settings', function () {
        return view('admin.views.setting');
    })->name('admin-setting');

    // profile CRUD
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // admin settings
    Route::get('/admin-settings', function () {
        return view('admin.views.setting');
    })->name('admin-setting');

    // admin gallery 
    Route::get('/admin-gallery', [GalleryController::class, 'index'])->name('admin-gallery');
    Route::post('/admin-gallery', [GalleryController::class, 'store'])->name('admin-gallery.store');
    Route::put('/admin-gallery/{gallery}', [GalleryController::class, 'update'])->name('admin-gallery.update');
    Route::delete('/admin-gallery/{gallery}', [GalleryController::class, 'destroy'])->name('admin-gallery.destroy');
    // admin partner
    Route::get('/admin-partners', [PartnerController::class, 'index'])->name('admin-partners');
    Route::post('/admin-partners', [PartnerController::class, 'store'])->name('admin-partners.store');
    Route::put('/admin-partners/{partner}', [PartnerController::class, 'update'])->name('admin-partners.update');
    Route::delete('/admin-partners/{partner}', [PartnerController::class, 'destroy'])->name('admin-partners.destroy');
    // reviews
    Route::get('/admin-reviews', [ReviewController::class, 'index'])->name('admin-reviews');
    Route::post('/admin-reviews', [ReviewController::class, 'store'])->name('admin-reviews.store');
    Route::put('/admin-reviews/{review}', [ReviewController::class, 'update'])->name('admin-reviews.update');
    Route::delete('/admin-reviews/{review}', [ReviewController::class, 'destroy'])->name('admin-reviews.destroy');
    // video
    Route::get('/admin-videos', [VideoController::class, 'index'])->name('admin-videos');
    Route::post('/admin-videos', [VideoController::class, 'store'])->name('admin-videos.store');
    Route::put('/admin-videos/{video}', [VideoController::class, 'update'])->name('admin-videos.update');
    Route::delete('/admin-videos/{video}', [VideoController::class, 'destroy'])->name('admin-videos.destroy');
    // blogs
    Route::get('/admin-blogs', [BlogController::class, 'index'])->name('admin-blogs');
    Route::post('/admin-blogs', [BlogController::class, 'store'])->name('admin-blogs.store');
    Route::put('/admin-blogs/{blog}', [BlogController::class, 'update'])->name('admin-blogs.update');
    Route::delete('/admin-blogs/{blog}', [BlogController::class, 'destroy'])->name('admin-blogs.destroy');
    // organizer 
    Route::get('/admin-organizers', [OrganizerController::class, 'index'])->name('admin-organizers');
    Route::post('/admin-organizers', [OrganizerController::class, 'store'])->name('admin-organizers.store');
    Route::put('/admin-organizers/{organizer}', [OrganizerController::class, 'update'])->name('admin-organizers.update');
    Route::delete('/admin-organizers/{organizer}', [OrganizerController::class, 'destroy'])->name('admin-organizers.destroy');
    //    team
    Route::get('/admin-team', [TeamController::class, 'index'])->name('admin-team');
    Route::post('/admin-team', [TeamController::class, 'store'])->name('admin-team.store');
    Route::put('/admin-team/{team}', [TeamController::class, 'update'])->name('admin-team.update');
    Route::delete('/admin-team/{team}', [TeamController::class, 'destroy'])->name('admin-team.destroy');
    // CONTACT LEADS
    Route::get('/admin-leads', [LeadController::class, 'index'])->name('admin-leads');
    Route::delete('/admin-leads/{lead}', [LeadController::class, 'destroy'])->name('admin-leads.destroy');
    Route::post('/leads/delete-selected', [LeadController::class, 'deleteSelected']);
    // Nodal Registration Leads
    Route::get('/admin-nodal-registration', [NodalRegisterationController::class, 'index'])->name('admin-nodal-registration');
    Route::delete('/admin-nodal-registration/{nodalRegistration}', [NodalRegisterationController::class, 'destroy'])->name('admin-nodal-registration.destroy');
    Route::post('/nodal-registrations/delete-selected', [NodalRegisterationController::class, 'deleteSelected'])->name('nodal-registrations.delete-selected');
    // booking trial leads
    Route::get('/admin-booking', [BookATrialController::class, 'index'])->name('admin-booking');
    Route::delete('/admin-booking/{trial}', [BookATrialController::class, 'destroy'])->name('admin-booking.destroy');
    Route::post('/booking-trials/delete-selected', [BookATrialController::class, 'deleteSelected'])->name('booking-trials.delete-selected');
    // player registration leads
    Route::get('/admin-player-registration', [PlayerRegistrationController::class, 'index'])->name('admin-player-registration');
    Route::delete('/admin-player-registration/{player}', [PlayerRegistrationController::class, 'destroy'])->name('admin-player-registration.destroy');
    Route::post('/player-registrations/delete-selected', [PlayerRegistrationController::class, 'deleteSelected'])->name('player-registrations.delete-selected');
    // admin membership access leads
    Route::get('/admin-membership-access', [MembershipAccessController::class, 'index'])->name('admin-membership-access');
    Route::delete('/admin-membership-access/{membershipAccess}', [MembershipAccessController::class, 'destroy'])->name('admin-membership-access.destroy');
    Route::post('/membership-access/delete-selected', [MembershipAccessController::class, 'deleteSelected'])->name('membership-access.delete-selected');
    // admin influencer leads
    Route::get('/admin-influencer', [InfluencerController::class, 'index'])->name('admin-influencer');
    Route::delete('/admin-influencer/{influencer}', [InfluencerController::class, 'destroy'])->name('admin-influencer.destroy');
    Route::post('/influencers/delete-selected', [InfluencerController::class, 'deleteSelected'])->name('influencers.delete-selected');
    // sponsor leads
    Route::get('/admin-sponsor', [SponsorController::class, 'index'])->name('admin-sponsor');
    ROute::delete('/admin-sponsor/{sponsor}', [SponsorController::class, 'destroy'])->name('admin-sponsor.destroy');
    Route::post('/sponsors/delete-selected', [SponsorController::class, 'deleteSelected'])->name('sponsors.delete-selected');

    // ************************************************************************************
    // ************************************************************************************
    // Sports CRUD CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-sports', [SportController::class, 'index'])->name('admin-sports');
    Route::post('/admin-sports', [SportController::class, 'store'])->name('admin-sports.store');
    Route::put('/admin-sports/{sport}', [SportController::class, 'update'])->name('admin-sports.update');
    Route::delete('/admin-sports/{sport}', [SportController::class, 'destroy'])->name('admin-sports.destroy');

    // ************************************************************************************
    // ************************************************************************************
    // Event categories page CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-event-categories', [EventCategoryController::class, 'index'])->name('admin-event-categories');
    Route::post('/admin-event-categories', [EventCategoryController::class, 'store'])->name('admin-event-categories.store');
    Route::put('/admin-event-categories/{eventCategory}', [EventCategoryController::class, 'update'])->name('admin-event-categories.update');
    Route::delete('/admin-event-categories/{eventCategory}', [EventCategoryController::class, 'destroy'])->name('admin-event-categories.destroy');

    // ************************************************************************************
    // ************************************************************************************
    // home page CMS
    // ************************************************************************************
    // ************************************************************************************
    // admin home slider
    Route::get('/admin-home-slider', [HomeSliderController::class, 'index'])->name('admin-home-slider');
    Route::post('/admin-home-slider', [HomeSliderController::class, 'store'])->name('admin-home-slider.store');
    Route::put('/admin-home-slider/{slider}', [HomeSliderController::class, 'update'])->name('admin-home-slider.update');
    Route::delete('/admin-home-slider/{slider}', [HomeSliderController::class, 'destroy'])->name('admin-home-slider.destroy');
    // about section
    Route::get('/admin-home-about', [HomeAboutSectionController::class, 'index'])->name('admin-home-about.index');
    Route::put('/admin-home-about', [HomeAboutSectionController::class, 'update'])->name('admin-home-about.update');
    // how we work section
    Route::get('/admin-how-we-work', [HomeWorkSectionController::class, 'index'])->name('admin-how-we-work.index');
    Route::put('/admin-how-we-work', [HomeWorkSectionController::class, 'update'])->name('admin-how-we-work.update');
    // home benefit section
    Route::get('/admin-home-benefit', [HomeBenefitController::class, 'index'])->name('admin-home-benefit.index');
    Route::put('/admin-home-benefit/{section}', [HomeBenefitController::class, 'update'])
        ->name('admin-home-benefit.update');
    // ************************************************************************************
    // ************************************************************************************
    // About page CMS
    // ************************************************************************************
    // ************************************************************************************
    // about page about section
    Route::get('/admin-about-section', [AboutSectionController::class, 'index'])->name('admin-about-section.index');
    Route::put('/admin-about-section/{section}', [AboutSectionController::class, 'update'])
        ->name('admin-about-section.update');
    // about page values section
    Route::get('/admin-about-values', [AboutValueController::class, 'index'])->name('admin-about-values.index');
    Route::put('/admin-about-values/{section}', [AboutValueController::class, 'update'])
        ->name('admin-about-values.update');
    // ************************************************************************************
    // ************************************************************************************
    // Organizer page CMS
    // ************************************************************************************
    // ************************************************************************************
    // organizer about section
    Route::get('/admin-organizer-about', [OrganizerAboutSectionController::class, 'index'])->name('admin-organizer-about.index');
    Route::put('/admin-organizer-about/{section}', [OrganizerAboutSectionController::class, 'update'])
        ->name('admin-organizer-about.update');
    // ************************************************************************************
    // ************************************************************************************
    // privacy Policy page CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-privacy-policy', [PrivacyPolicyController::class, 'index'])->name('admin-privacy-policy.index');
    Route::put('/admin-privacy-policy/{section}', [PrivacyPolicyController::class, 'update'])->name('admin-privacy-policy.update');
    // ************************************************************************************
    // ************************************************************************************
    // Terms Condition page CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-terms-condition', [TermsConditionController::class, 'index'])->name('admin-terms-condition.index');
    Route::put('/admin-terms-condition/{section}', [TermsConditionController::class, 'update'])->name('admin-terms-condition.update');
    // ************************************************************************************
    // ************************************************************************************
    // Required Documents CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-required-documents', [RequiredDocumentController::class, 'index'])->name('admin-required-documents.index');
    Route::put('/admin-required-documents/{section}', [RequiredDocumentController::class, 'update'])->name('admin-required-documents.update');
    // ************************************************************************************
    // ************************************************************************************
    // Selection Process CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-selection-process', [SelectionProcessController::class, 'index'])->name('admin-selection-process.index');
    Route::put('/admin-selection-process/{section}', [SelectionProcessController::class, 'update'])->name('admin-selection-process.update');
    // ************************************************************************************
    // ************************************************************************************
    // Website settings CMS
    // ************************************************************************************
    // ************************************************************************************

    Route::get('/admin-settings', [WebsiteSettingController::class, 'index'])->name('admin-settings.index');
    Route::put('/admin-settings', [WebsiteSettingController::class, 'update'])->name('admin-settings.update');
    // ************************************************************************************
    // ************************************************************************************
    // social settings CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-social-settings', [SocialSettingController::class, 'index'])
        ->name('admin-social-settings.index');

    Route::put('/admin-social-settings', [SocialSettingController::class, 'update'])
        ->name('admin-social-settings.update');
    // ************************************************************************************
    // ************************************************************************************
    // color settings CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-colour-settings', [ColourSettingController::class, 'index'])
        ->name('admin-colour-settings.index');

    Route::put('/admin-colour-settings', [ColourSettingController::class, 'update'])
        ->name('admin-colour-settings.update');


    // ROLE CONTROLLER
    Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    Route::post('roles', [RoleController::class, 'store'])->name('roles.store');
    Route::put('roles/{id}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');


    Route::get('/admin-users', [UserController::class, 'index'])->name('admin-users.index');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    // admin match
    Route::prefix('admin-game-match')->name('admin-game-match.')->group(function () {

        Route::get('/', [GameMatchController::class, 'index'])->name('index');
        Route::post('/', [GameMatchController::class, 'store'])->name('store');
        Route::put('/{id}', [GameMatchController::class, 'update'])->name('update');
        Route::delete('/{id}', [GameMatchController::class, 'destroy'])->name('destroy');

    });
    Route::get('/auction', [AuctionController::class, 'index'])->name('auction.index');
    Route::post('/auction', [AuctionController::class, 'store'])->name('auction.store');
    Route::put('/auction/{id}', [AuctionController::class, 'update'])->name('auction.update');
    Route::delete('/auction/{id}', [AuctionController::class, 'destroy'])->name('auction.destroy');
});




require __DIR__ . '/auth.php';
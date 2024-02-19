<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;


// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/p', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/p', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/p', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

// Route::middleware('auth')->group(function () {
//     Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
//         ->name('logout');
// });

// Route::middleware('guest')->group(function () {
// Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
// Route::post('register', [RegisteredUserController::class, 'store']);

// Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
// Route::post('login', [AuthenticatedSessionController::class, 'store']);

// Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
// Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

// Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
// Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
// });

Route::get('/error', function () {
    return view('error');
})->name('error');

////////////////////////////////----------Pages----------///////////////////////////////////////////////////////////////////////////
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/homeApi', [MainController::class, 'homeApi'])->name('homeApi');
Route::get('/about', [MainController::class, 'AboutPage'])->name('AboutPage');
Route::get('/jobs', [MainController::class, 'JobPage'])->name('JobPage');
Route::get('/blog', [MainController::class, 'BlogPage'])->name('BlogPage');
Route::get('/contact', [MainController::class, 'ContactPage'])->name('ContactPage');
Route::post('/contactText', [MainController::class, 'ContactText'])->name('ContactText');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::middleware('auth')->group(function () {
    Route::post('/profile', [UserController::class, 'UserProfileUpdate'])->name('users-profile.store');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::get('/AdminCompanie', [CompaniesController::class, 'AdminCompanie'])->name('AdminCompanie');

/////////////////////////////////------Admin-------//////////////////////////////////////////////////////////////////////////////////
Route::middleware(['auth', 'roll:Admin'])->group(function () {
    Route::get('/AdminDashboard', [DashBoardController::class, 'AdminDashboard'])->name('AdminDashboard');

    Route::get('/AdminCompanies', [CompaniesController::class, 'AdminCompanies'])->name('AdminCompanies');
    // Route::get('/AdminCompanie', [CompaniesController::class, 'AdminCompanie'])->name('AdminCompanie');

    Route::get('/AdminCompanies/edit/{id}', [CompaniesController::class, 'AdminCompaniesEdit'])->name('AdminCompaniesEdit');
    Route::post('/AdminCompanies/edit/{id}', [CompaniesController::class, 'AdminCompaniesEditStore'])->name('AdminCompaniesEditStore');
    Route::get('/AdminCompanies/delete/{id}', [CompaniesController::class, 'AdminCompaniesDelete'])->name('AdminCompaniesDelete');
    Route::get('/AdminJobs', [JobsController::class, 'AdminJobs'])->name('AdminJobs');
    Route::get('/AdminJobs/edit/{id}', [JobsController::class, 'AdminJobsEdit'])->name('AdminJobsEdit');
    Route::post('/AdminJobs/edit/{id}', [JobsController::class, 'AdminJobsEditStore'])->name('AdminJobsEditStore');
    Route::get('/AdminRoll', [UserController::class, 'AdminRollPermission'])->name('AdminRollPermission');
    Route::get('/AdminRoll/edit/{id}', [UserController::class, 'AdminRollPermissionEdit'])->name('AdminRollPermissionEdit');
    Route::post('/AdminRoll/edit/{id}', [UserController::class, 'AdminRollPermissionStore'])->name('AdminRollPermissionStore');
    Route::get('/Admin/Profile', [UserController::class, 'AdminProfile'])->name('AdminProfile');

    Route::get('/AdminHome', [MainController::class, 'HomePageAdmin'])->name('HomePageAdmin');
    Route::post('/AdminHome', [MainController::class, 'HomePageStoreAdmin'])->name('HomePageStoreAdmin');

    Route::get('/AdminAbout', [MainController::class, 'AboutPageAdmin'])->name('AboutPageAdmin');
    Route::post('/AdminAbout', [MainController::class, 'AboutPageStoreAdmin'])->name('AboutPageStoreAdmin');

    Route::get('/Adminjobs', [MainController::class, 'JobsPageAdmin'])->name('JobsPageAdmin');
    Route::post('/Adminjobs', [MainController::class, 'JobsPageStoreAdmin'])->name('JobsPageStoreAdmin');

    Route::get('/AdminBlog', [MainController::class, 'BlogPageAdmin'])->name('BlogPageAdmin');
    Route::post('/AdminBlog', [MainController::class, 'BlogPageStoreAdmin'])->name('BlogPageStoreAdmin');

    Route::get('/AdminContact', [MainController::class, 'ContactPageAdmin'])->name('ContactPageAdmin');
    Route::post('/AdminContact', [MainController::class, 'ContactPageStoreAdmin'])->name('ContactPageStoreAdmin');

    Route::get('/Admin/Plugin', [DashBoardController::class, 'AdminPlugin'])->name('AdminPlugin');
});
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////------Company-------//////////////////////////////////////////////////////////////////////////////
Route::middleware(['auth', 'roll:Company'])->group(function () {
    Route::get('/CompanyDashboard', [DashBoardController::class, 'CompanyDashboard'])->name('CompanyDashboard');

    Route::get('/CompanyInfo', [CompaniesController::class, 'CompanyInfo'])->name('CompanyInfo');
    Route::post('/CompanyInfo', [CompaniesController::class, 'CompanyInfoUpdate'])->name('CompanyInfoUpdate');

    Route::get('/CompanyJobs', [JobsController::class, 'CompanyJobsShow'])->name('CompanyJobsShow');
    Route::get('/CompanyJobs/create', [JobsController::class, 'CompanyJobsCreate'])->name('CompanyJobsCreate');
    Route::post('/CompanyJobs/create', [JobsController::class, 'CompanyJobsStore'])->name('CompanyJobsStore');

    Route::get('/CompanyJob/{jobId}', [JobsController::class, 'CompanyJobView'])->name('CompanyJobView');
    Route::post('/CompanyJob/{jobId}', [JobsController::class, 'CompanyJobViewUpdate'])->name('CompanyJobViewUpdate');

    Route::get('/CompanyJob/delete/{jobId}', [JobsController::class, 'CompanyJobDelete'])->name('CompanyJobDelete');
    Route::get('/CompanyApply/{jobId}', [JobsController::class, 'CompanyApply'])->name('CompanyApply');
    Route::get('/CompanyApplyUser/{jobId}/{userId}', [JobsController::class, 'CompanyApplyUser'])->name('CompanyApplyUser');
    Route::get('/Company/Profile', [UserController::class, 'CompanyProfile'])->name('CompanyProfile');
    Route::get('/Company/Plugin', [DashBoardController::class, 'CompanyPlugin'])->name('CompanyPlugin');
});
////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////------Candidate-------/////////////////////////////////////////////////////
Route::middleware(['auth', 'roll:Candidate'])->group(function () {
    Route::get('/dashboard', [DashBoardController::class, 'CandidateDashboard'])->name('CandidateDashboard');
    Route::get('/ApplyJob/{id}', [JobsController::class, 'ApplyJob'])->name('ApplyJob');
    Route::get('/Jobs', [JobsController::class, 'Jobs'])->name('Jobs');
    Route::get('/Jobs/{jobId}', [JobsController::class, 'JobView'])->name('JobView');
    Route::get('/profileCandidate', [ProfileController::class, 'ProfileCandidate'])->name('ProfileCandidate');
    Route::post('/profileCandidateStore', [ProfileController::class, 'ProfileCandidateStore'])->name('ProfileCandidateStore');
    Route::get('/profile', [UserController::class, 'UserProfile'])->name('UserProfile');
});
////////////////////////////////////////////////////////////////////////////////////////////////////////////




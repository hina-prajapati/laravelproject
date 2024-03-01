<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\UserDashController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::any('main/profile-page', [ProfilesController::class, 'profile'])->name('main/profile-page');
    Route::any('main/edit-profile/{id}', [ProfilesController::class, 'edit'])->name('main.edit-profile');
    // Route::any('/user/dashboard/profiles/edit/{id}', [UserDashController::class, 'edit'])->name('profiles.edit');

    Route::any('/matches', [DashboardController::class, 'matches'])->name('/matches');
    Route::any('/all-matches', [PostController::class, 'index'])->name('/all-matches');
    Route::get('/view-matches/{id}', [PostController::class,'view'])->name('/view-matches');
    Route::get('/edit-match/{id}',[PostController::class,'edit'])->name('/edit-match');

    Route::get('/fetch-states/{id}',[ProfilesController::class,'fetchStates']);
    Route::get('/fetch-cities/{id}',[ProfilesController::class,'fetchCities']);
});

Route::get('/verify-email/{token}', [UserController::class, 'verifyEmail'])->name('verify.email');

// Route::get('varifymail',[UserController::class, 'varifyemail']);
Route::get('varifycontact',[UserController::class, 'varifycontact']);

Route::any('/', [DashboardController::class, 'home'])->name('/');
Route::any('/about', [DashboardController::class, 'about'])->name('/about');
Route::any('/blog', [DashboardController::class, 'blog'])->name('/blog');
// Route::any('/profile-page', [DashboardController::class, 'profile'])->name('/profile-page');
// Route::any('/edit-profile', [DashboardController::class, 'edit'])->name('/edit-profile');
// Route::any('/matches', [DashboardController::class, 'matches'])->name('/matches');
// Route::any('/all-matches', [PostController::class, 'index'])->name('/all-matches');
// Route::get('/view-matches/{id}', [PostController::class,'view'])->name('/view-matches');
// Route::get('/edit-match/{id}',[PostController::class,'edit'])->name('/edit-match');
Route::any('/user/dashboard/filter', [PostController::class, 'filter']);
Route::put('/update/{id}',[PostController::class,'update']);



Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    // Other admin routes
});


// Route::post('/validate-form', [UserController::class, 'validateForm'])->name('validate-form');

// Route::any('/contact', [DashboardController::class, 'contact'])->name('/contact');

Route::get('/register', [UserController::class, 'create'])->name('/register');
Route::post('/register', [UserController::class, 'registerpost'])->name('/register');
Route::get('/login', [UserController::class, 'login'])->name('/login');
Route::post('/login', [UserController::class, 'loginpost'])->name('/login');
Route::any('/logout', [UserController::class, 'logout'])->name('/logout');
Route::any('/filter', [UserController::class, 'filter']);
Route::get('/dashboard/list', [DashboardController::class, 'list'])->name('/dashboard/list');
Route::any('/delete/{id}', [DashboardController::class, 'destroy'])->name('/delete/{id}');
Route::post('/activate/{id}', [DashboardController::class, 'activateUser'])->name('activateUser');
Route::post('/deactivate/{id}', [DashboardController::class, 'deactivateUser'])->name('deactivateUser');
Route::post('/check-email', [UserController::class, 'checkEmail']);
Route::post('/check-phone', [UserController::class, 'checkPhone']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('/dashboard')->middleware('auth');
// Route::get('/user/dashboard', [UserDashController::class, 'index'])->name('/dashboard')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/user/dashboard/profile/index', [ProfilesController::class, 'index'])->name('profile.index');

    Route::get('/user/dashboard', [UserDashController::class, 'index'])->name('user.dashboard');
});


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');



Route::any('/user/dashboard/students/add', [StudentController::class, 'add'])->name('students.create');
Route::any('/user/dashboard/students/list', [StudentController::class, 'list'])->name('students.list');
Route::any('/user/dashboard/students/delete/{id}', [StudentController::class, 'destroy'])->name('/user/dashboard/students/delete/{id}');
Route::any('/user/dashboard/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::any('/filter', [StudentController::class, 'filter']);

Route::get('/change-password', [DashboardController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [DashboardController::class, 'updatePassword'])->name('update-password');

Route::get('/user/dashboard/profiles/create', [ProfileController::class, 'index'])->name('/user/dashboard/profiles/create');
Route::post('/user/dashboard/profiles/create', [ProfileController::class, 'post'])->name('/user/dashboard/profiles/create');
Route::get('/user/dashboard/profiles/getList', [UserDashController::class, 'list'])->name('/user/dashboard/profiles/getList');
Route::any('/user/dashboard/profiles/delete/{id}', [UserDashController::class, 'destroy'])->name('/user/dashboard/profiles/delete/{id}');
Route::any('/user/dashboard/profiles/edit/{id}', [UserDashController::class, 'edit'])->name('profiles.edit');
Route::any('/filter', [ProfileController::class, 'filter']);
Route::any('/profile',[ProfileController::class,'getData']);


// // Edit (Display Edit Form)
// Route::get('/user/dashboard/profiles/edit/{id}', [UserDashController::class, 'edit'])->name('profiles.edit');

// // Update (Handle Update Form Submission)
// Route::put('/user/dashboard/profiles/{id}', [UserDashController::class, 'update'])->name('profiles.update');

Route::get('/user/dashboard/index', [PostController::class, 'index']);

Route::get('/create',function(){
    return view('create');
    });

Route::prefix('user/dashboard')->group(function () {
    Route::get('/create', function () {
        return view('create');
    });
});


Route::post('/post',[PostController::class,'store']);
Route::delete('/delete/{id}',[PostController::class,'destroy']);


Route::get('/deleteimage/{id}',[PostController::class,'deleteimage']);
// Route::delete('/deletecover/{id}',[PostController::class,'deletecover']);
// Route::get('/edit/{id}',[PostController::class,'edit']);
// Route::any('/user/dashboard/filter', [PostController::class, 'filter']);
// Route::put('/update/{id}',[PostController::class,'update']);

Route::delete('/deletecover/{id}',[UserDashController::class,'deletecover']);
Route::delete('/deleteimage/{id}',[UserDashController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[UserDashController::class,'deletecover']);


// Route::get('/view/{id}', [PostController::class,'view'])->name('view');


// Route::get('/items', [ItemController::class, 'index'])->name('items.index');
// Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
// Route::post('/items', [ItemController::class, 'store'])->name('items.store');


Route::get('/user/dashboard/profile/edit/{id}', [ProfilesController::class, 'edit'])->name('profile.edit');

Route::put('/user/dashboard/profile/update', [ProfilesController::class, 'update'])->name('profile.update');

// Define the activation route
Route::post('/user/{id}/activate', [UserController::class, 'activate'])->name('user.activate');

// Define the deactivation route
Route::post('/user/{id}/deactivate', [UserController::class, 'deactivate'])->name('user.deactivate');


// Route::get('changeStatus', 'UserController@changeStatus')->name('changeStatus');


Route::get('/change-password', [ProfilesController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [ProfilesController::class, 'updatePassword'])->name('update-password');



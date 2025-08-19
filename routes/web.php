<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;

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
    return view('cms.auth.loginType');
});


//to perform login authentecation
Route::prefix('cms/')->middleware('guest:admin,author')->group(function () {

    Route::get('loginType', [UserAuthController::class, 'loginType'])->name('login.type');

    Route::get('{guard}/login', [UserAuthController::class, 'showLogin'])->name('view.login');
    Route::post('{guard}/login', [UserAuthController::class, 'login']);
});

//admin management
Route::prefix('cms/admin')->middleware('auth:admin,author')->group(function () {
    Route::get('logout', [UserAuthController::class, 'logout'])->name('view.logout');

    Route::get('changePassword', [UserAuthController::class, 'changePassword'])->name('changePassword');
    Route::post('updatePassword', [UserAuthController::class, 'updatePassword'])->name('updatePassword');

    Route::get('edit-profile-admin', [UserAuthController::class, 'editProfile'])->name('edit-profile-admin');
    Route::post('update-profile-admin', [UserAuthController::class, 'updateProfile'])->name('update-profile-admin');

    Route::get('edit-profile-author', [UserAuthController::class, 'editProfile'])->name('edit-profile-author');
    Route::post('update-profile-author', [UserAuthController::class, 'updateProfile'])->name('update-profile-author');


    Route::get('profile/{user}', [UserAuthController::class,'profile'])->name('user.profile');

});

//cms management
Route::prefix('cms/admin/')->group(function () {

    Route::view('parent', 'cms.parent'); //for testing

    Route::resource('countries', CountryController::class);
    Route::post("countries-update/{id}", [CountryController::class, "update"])->name('countries-update');

    Route::resource('cities', CityController::class);
    Route::post("cities-update/{id}", [CityController::class, "update"])->name('cities-update');

    Route::resource('categories', CategoryController::class);
    Route::post("categories-update/{id}", [CategoryController::class, "update"])->name('categories-update');

    Route::resource('authors', AuthorController::class);
    Route::post("authors-update/{id}", [AuthorController::class, "update"])->name('authors-update');

    Route::resource('admins', AdminController::class);
    Route::post("admins-update/{id}", [AdminController::class, "update"])->name('admins-update');

    Route::resource('articles', ArticleController::class);
    Route::post('articles-update/{id}', [ArticleController::class, 'update'])->name('articles-update');
    Route::get('indexArticle/{id}', [ArticleController::class, 'indexArticle'])->name('indexArticle');
    Route::get('createArticle/{id}', [ArticleController::class, 'createArticle'])->name('createArticle');

});

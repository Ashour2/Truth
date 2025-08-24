<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SliderController;
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
    return view('news.parent');
});

// ✅ تعديل: خليت middleware guest عام عشان يشتغل للـ admin و author
Route::prefix('cms/')->middleware('guest')->group(function () {

    Route::get('loginType', [UserAuthController::class, 'loginType'])->name('login.type');

    Route::get('{guard}/login', [UserAuthController::class, 'showLogin'])->name('view.login');
    Route::post('{guard}/login', [UserAuthController::class, 'login']);
});


Route::middleware('auth:admin,author')->prefix('cms/admin')->group(function () {
    Route::get('logout', [UserAuthController::class, 'logout'])->name('view.logout');

    Route::get('changePassword', [UserAuthController::class, 'changePassword'])->name('changePassword');
    Route::post('updatePassword', [UserAuthController::class, 'updatePassword'])->name('updatePassword');

    Route::get('edit-profile-admin', [UserAuthController::class, 'editProfile'])->name('edit-profile-admin');
    Route::post('update-profile-admin', [UserAuthController::class, 'updateProfile'])->name('update-profile-admin');

    Route::get('edit-profile-author', [UserAuthController::class, 'editProfile'])->name('edit-profile-author');
    Route::post('update-profile-author', [UserAuthController::class, 'updateProfile'])->name('update-profile-author');

    Route::get('profile/{user}', [UserAuthController::class,'profile'])->name('user.profile');
});


Route::prefix('cms/admin/')->middleware('auth:admin,author')->group(function () {

    Route::view('parent', 'cms.parent'); //for testing
    Route::view('', 'cms.home')->name('mainPage');
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



    Route::resource('roles', RoleController::class);
    Route::post('roles-update/{id}', [RoleController::class, 'update'])->name('roles-update');

    Route::resource('permissions', PermissionController::class);
    Route::post('permissions-update/{id}', [PermissionController::class, 'update'])->name('permissions-update');


    Route::resource('roles.permissions' , RolePermissionController::class);

    Route::resource('sliders', SliderController::class);
    Route::post('sliders-update/{id}', [SliderController::class, 'update'])->name('sliders-update');


    Route::resource('contacts', ContactController::class);
    Route::resource('comments', CommentController::class);




});

Route::prefix('home')->group(function(){
    Route::get('' , [HomeController::class , 'index'])->name('view.index');
    Route::get('all/{id}' , [HomeController::class , 'allNews'])->name('view.all');
    Route::get('det/{id}' , [HomeController::class , 'detailes'])->name('view.det');
    Route::get('contact' , [HomeController::class , 'showContact'])->name('view.contact');
    Route::post('contacts' , [HomeController::class , 'storeContact'])->name('contacts');
    Route::post('comments' , [HomeController::class , 'storeComment'])->name('comments');
    //Route::post('countsHome' , [HomeController::class , 'countsHome'])->name('countsHome');

});

Route::get('/search', [SearchController::class, 'index'])->name('search');

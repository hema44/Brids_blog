<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Blog\BlogPostController;
use App\Http\Controllers\Diseases\DiseasesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Posts\PostsController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Categories\CategoriesController;
use App\Http\Controllers\Search\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [WelcomeController::class,'index'])->name('welcome');


Auth::routes();

// this routes for normal user to update his profile actions
Route::middleware(['auth'])->group(function (){

    Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::put('users/profile', [UsersController::class,'update'])->name('users.update-profile');
    Route::get('users/profile', [UsersController::class,'edit'])->name('users.edit-profile');

});
//this routes for admin user have access to add or remove any data to site
Route::middleware(['auth', 'Admin'])->group(function () {

    Route::get('users', [UsersController::class,'index'])->name('users.index');

    Route::post('users/{user}/make-admin', [UsersController::class,'makeAdmin'])->name('users.make-admin');


    Route::resource('categories',CategoriesController::class);

    Route::resource('posts', PostsController::class);

    Route::resource('Disease', DiseasesController::class);

//    Route::resource('tags', TagsController::class);

    Route::get('trashed-posts', [PostsController::class,'trashed'])->name('trashed-posts.index');

    Route::put('restore-posts/{post}', [PostsController::class,"restore"])->name('restore-posts');
});

//search routes
Route::post('/search-disease',[SearchController::class, 'search_disses']);
Route::post('/search-symptoms',[SearchController::class,'search_Symptoms']);
Route::get('/search',[SearchController::class,'index']);


// used for show post selected
Route::get('/blog/posts/{post}', [BlogPostController::class, 'show'])->name('blog.show');


//our routes to sign in with google account
Route::get('login/google',[LoginController::class,'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback',[LoginController::class,'handleGoogleCallBack']);

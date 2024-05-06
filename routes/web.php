<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\PostController;
use App\Http\Controllers\Home\FooterController;
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
    return view('frontend.index');
})->name('frontend.home');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin all route
Route::middleware(['auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'Profile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');
        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::put('/update/password', 'UpdatePassword')->name('update.password');
    });
});

// Home slide all route
Route::controller(HomeSliderController::class)->group(function() {
    Route::get('slider', 'HomeSlider')->name('home.slider');
    Route::put('slider/update', 'UpdateSlider')->name('update.slider');
});

// About all route
Route::controller(AboutController::class)->group(function() {
    Route::get('/about', 'AboutPage')->name('about.page');
    Route::put('/about/update', 'UpdateAbout')->name('update.about');
    Route::get('/about/home', 'HomeAbout')->name('home.about');

    Route::get('/about/multiimage', 'AboutMultiImage')->name('about.multi.image');
    Route::post('/about/store/multi/image', 'StoreMultiImage')->name('store.multi.image');
    Route::get('/about/all/multiimage', 'AllMultiImage')->name('all.multi.image');
    Route::get('/about/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.image');
    Route::put('/about/update/multi/image', 'UpdateMultiImage')->name('update.multi.image');
    Route::get('/about/delete/multi/image/{id}', 'DeleteMultiImage')->name('delete.multi.image');
});

// Portfolio all route
Route::controller(PortfolioController::class)->group(function() {
    Route::get('/portfolio/all', 'AllPortfolio')->name('all.portfolio');
    Route::get('/portfolio/add', 'AddPortfolio')->name('add.portfolio');
    Route::post('/portfolio/store', 'StorePortfolio')->name('store.portfolio');
    Route::get('/portfolio/edit/{id}', 'EditPortfolio')->name('edit.portfolio');
    Route::put('/portfolio/update', 'UpdatePortfolio')->name('update.protfolio');
    Route::get('/portfolio/delete/{id}', 'DeletePortfolio')->name('delete.portfolio');
    Route::get('/portfolio/details/{id}', 'PortfolioDetails')->name('portfolio.details');
    Route::get('/portfolio', 'HomePortfolio')->name('home.portfolio');
});

// Post Category all route
Route::controller(BlogCategoryController::class)->group(function() {
    Route::get('/all/blog/category', 'AllBlogCategory')->name('all.blog.category');
    Route::post('/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');
    Route::get('/edit/blog/category/{id}', 'EditBlogCategory')->name('edit.blog.category');
    Route::put('/update/blog/category/{id}', 'UpdateBlogCategory')->name('update.blog.category');
    Route::get('/delete/blog/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category'); 
});

// Post all route
Route::controller(PostController::class)->group(function() {
    Route::get('/all/post', 'AllPost')->name('all.post');
    Route::get('/add/post', 'AddPost')->name('add.post');
    Route::post('/store/post', 'StorePost')->name('store.post');
    Route::get('/delete/post/{id}', 'DeletePost')->name('delete.post');
    Route::get('/edit/post/{id}', 'EditPost')->name('edit.post');
    Route::put('/update/post', 'UpdatePost')->name('update.post');

    Route::get('/blog/details/{id}', 'BlogDetails')->name('blog.details');
    Route::get('/category/blog/{id}', 'CategoryBlog')->name('category.blog');
    Route::get('/blog', 'HomeBlog')->name('home.blog');
});

// Footer all route
Route::controller(FooterController::class)->group(function() {
    Route::get('/footer/setup', 'FooterSetup')->name('footer.setup');
    Route::post('/update/footer', 'UpdateFooter')->name('update.footer');
});

// Contact form all route
Route::controller(ContactController::class)->group(function() {
    Route::get('/contact', 'Contact')->name('contact.me');
    Route::post('/store/message', 'StoreMessage')->name('store.message');
    Route::get('/contact/message', 'ContactMessage')->name('contact.message');   
    Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message');
});
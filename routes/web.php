<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\FooterController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['web'])->group(function () {
    //Admin All Routes
    Route::controller(AdminController::class)->group(function() {
        Route::get('/admin/logout', 'logout')->name('admin.logout');
        Route::get('/admin/profile', 'getProfile')->name('admin.profile');
        Route::get('/edit/profile', 'editProfile')->name('edit.profile');
        Route::post('/store/profile', 'storeProfile')->name('store.profile');

        Route::get('/change/password', 'changePassword')->name('change.password');
        Route::post('/update/password', 'updatePassword')->name('update.password');

    });
});


//Home Slide All Routes
Route::controller(HomeSliderController::class)->group(function() {
    Route::get('/home', 'HomeMain')->name('home');
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
    Route::post('/update/slider', 'updateSlider')->name('update.slider');
});

//About Page All Routes
Route::controller(AboutController::class)->group(function() {
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about', 'updateAbout')->name('update.about');
    Route::get('/about', 'HomeAbout')->name('home.about');
    Route::get('/about/multi/image', 'AboutMultiImage')->name('about.multi.image');
    Route::get('/all/multi/image', 'AllMultiImage')->name('all.multi.image');
    Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.image');

    Route::post('/store/multi/image', 'StoreMultiImage')->name('store.multi.image');
    Route::post('/update/multi/image', 'UpdateMultiImage')->name('update.multi.image');

    Route::get('/delete/multi/image/{id}', 'DeleteMultiImage')->name('delete.multi.image');

});

//Portfolio Routes
Route::controller(PortfolioController::class)->group(function() {
    Route::get('/all/portfolio', 'AllPortfolio')->name('all.portfolio');
    Route::get('/add/portfolio', 'AddPortfolio')->name('add.portfolio');
    Route::get('/edit/portfolio/{id}', 'EditPortfolio')->name('edit.portfolio');
    Route::get('/delete/portfolio/{id}', 'DeletePortfolio')->name('delete.portfolio');
    Route::get('/portfolio/details/{id}', 'PortfolioDetails')->name('portfolio.details');


    Route::post('/add/portfolio', 'StorePortfolio')->name('add.portfolio');
    Route::post('/update/portfolio', 'UpdatePortfolio')->name('update.portfolio');

});

//Blog Category All Routes
Route::controller(BlogCategoryController::class)->group(function() {
    Route::get('/all/blog/category', 'AllBlogCategory')->name('all.blog.category');
    Route::get('/add/blog/category', 'AddBlogCategory')->name('add.blog.category');
    Route::get('/edit/blog/category/{id}', 'EditBlogCategory')->name('edit.blog.category');
    Route::get('/delete/blog/category{id}', 'DeleteBlogCategory')->name('delete.blog.category');

    Route::post('/store/blog/category', 'StoreBlogCategory')->name('story.blog.category');
    Route::post('/update/blog/category', 'UpdateBlogCategory')->name('update.blog.category');

});

//Blog All Routes
Route::controller(BlogController::class)->group(function() {
    Route::get('/all/blog', 'AllBlog')->name('all.blog');
    Route::get('/add/blog', 'AddBlog')->name('add.blog');
    Route::get('/edit/blog/{id}', 'EditBlog')->name('edit.blog');
    Route::get('/delete/blog/{id}', 'DeleteBlog')->name('delete.blog');

    Route::post('/store/blog', 'StoreBlog')->name('store.blog');
    Route::post('/update/blog', 'UpdateBlog')->name('update.blog');

    Route::get('/blog/details/{id}', 'BlogDetails')->name('blog.details');
    Route::get('/category/blog/{id}', 'CategoryBlog')->name('category.blog');

    Route::get('/blog', 'HomeBlog')->name('home.blog');

});

//Footer All Routes
Route::controller(FooterController::class)->group(function() {
    Route::get('/footer/setup', 'FooterSetup')->name('footer.setup');
    Route::post('/footer/update', 'FooterUpdate')->name('footer.update');
});

//Contact All Routes
Route::controller(ContactController::class)->group(function() {
    Route::get('/contact', 'Contact')->name('contact.me');
    Route::get('/contact/message', 'ContactMessage')->name('contact.message');
    Route::get('/view/message/{id}', 'GetMessage')->name('view.contact_message');

    Route::post('/story/contact_message', 'StoreContactMessage')->name('story.contact_message');
});

require __DIR__.'/auth.php';

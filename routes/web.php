<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\InfoshalaController;
use App\Http\Controllers\TagController;
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
Route::middleware(['userVisitor'])->group(function () {
    Route::get('/', [InfoshalaController::class, 'index'])->name('index');
    Route::get('about', [InfoshalaController::class, 'about'])->name('about');
    Route::get('/services', [InfoshalaController::class, 'services'])->name('services');
    Route::get('/website-design-company', [InfoshalaController::class, 'websiteDesignCompany'])->name('website-design-company');
    Route::get('/website-development-company', [InfoshalaController::class, 'websiteDevelopmentCompany'])->name('website-development-company');
    Route::get('/digital-marketing-company', [InfoshalaController::class, 'digitalMarketingCompany'])->name('digital-marketing-company');
    Route::get('/graphic-designing-company', [InfoshalaController::class, 'graphicDesigningCompany'])->name('graphic-designing-company');
    Route::get('/ecommerce-services', [InfoshalaController::class, 'ecommerceServices'])->name('ecommerce-services');
    Route::get('/seo-company-gurgaon', [InfoshalaController::class, 'seoCompanyGurgaon'])->name('seo-company-gurgaon');
    Route::get('/ytvideo', [InfoshalaController::class, 'ytVideo'])->name('ytvideo');
    Route::get('/contact', [InfoshalaController::class, 'contact'])->name('contact');
    Route::post('/save-contact', [ContactFormController::class, 'store'])->name('saveContact');
    Route::get('/portfolio', [InfoshalaController::class, 'portfolio'])->name('portfolio');
    Route::get('/faqs', [InfoshalaController::class, 'faqs'])->name('faqs');
    Route::get('/privacy-policy', [InfoshalaController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('/team', [InfoshalaController::class, 'team'])->name('team');
    Route::get('/blog', [InfoshalaController::class, 'blog'])->name('blog');
    Route::get('/blog-grid', [InfoshalaController::class, 'blogGrid'])->name('blog-grid');
    Route::get('/blog-single/{title}', [InfoshalaController::class, 'blogSingle'])->name('blog-single');
});






//admin
Route::get('/auth', function(){ if(session()->get('email')){ return redirect()->route('adminDashboard');} return view('admin.login');})->name('adminLogin');
// Route::get('/signup', [AdminController::class, 'signUp'])->name('signup');
Route::post('/loginPost', [AdminController::class, 'adminLoginPost'])->name('adminLoginPost');


Route::group(['prefix'=>'admin', 'middleware'=>['adminCheck']], function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('adminDashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('a_logout');


    Route::get('/add-category', [CategoryController::class, 'index'])->name('addCategory');
    Route::post('/add-category', [CategoryController::class, 'store'])->name('addCategory');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('editCategory');
    Route::post('/update-category', [CategoryController::class, 'update'])->name('updateCategory');
    Route::get('/destroy-category/{id}', [CategoryController::class, 'destroy'])->name('destroyCategory');

    Route::get('/add-tag', [TagController::class, 'index'])->name('addTag');
    Route::post('/add-tag', [TagController::class, 'store'])->name('addTag');
    Route::get('/edit-tag/{id}', [TagController::class, 'edit'])->name('editTag');
    Route::post('/update-tag', [TagController::class, 'update'])->name('updateTag');
    Route::get('/destroy-tag/{id}', [TagController::class, 'destroy'])->name('destroyTag');



    Route::get('/view-blog', [BlogController::class, 'index'])->name('viewBlog');
    Route::get('/add-blog', [BlogController::class, 'create'])->name('addBlog');
    Route::post('/add-blog', [BlogController::class, 'store'])->name('addBlog');
    Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('editBlog');
    Route::post('/update-blog', [BlogController::class, 'update'])->name('updateBlog');
    Route::get('/destroy-blog/{id}', [BlogController::class, 'destroy'])->name('destroyBlog');




    //form
    Route::get('contact-form', [ContactFormController::class, 'index'])->name('contact_us_data');
});


<?php

use App\Http\Controllers\InfoshalaController;
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
Route::get('/blog-grid', [InfoshalaController::class, 'blogGrid'])->name('blog-grid');
Route::get('/contact', [InfoshalaController::class, 'contact'])->name('contact');
Route::get('/portfolio', [InfoshalaController::class, 'portfolio'])->name('portfolio');
Route::get('/blog-single', [InfoshalaController::class, 'blogSingle'])->name('blog-single');
Route::get('/faqs', [InfoshalaController::class, 'faqs'])->name('faqs');
Route::get('/privacy-policy', [InfoshalaController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/team', [InfoshalaController::class, 'team'])->name('team');
Route::get('/blog', [InfoshalaController::class, 'blog'])->name('blog');





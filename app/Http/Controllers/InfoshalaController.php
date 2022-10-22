<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Infoshala;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InfoshalaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function services() {
        return view('services');
    }

    public function websiteDesignCompany() {
        return view('website-design-company');
    }

    public function websiteDevelopmentCompany() {
        return view('website-development-company');
    }

    public function digitalMarketingCompany() {
        return view('digital-marketing-company');
    }

    public function graphicDesigningCompany(){
        return view('graphic-designing-company');
    }

    public function ecommerceServices() {
        return view('ecommerce-services');
    }

    public function ytVideo() {
        return view('ytvideo');
    }

    public function contact() {
        return view('contact');
    }
    public function portfolio() {
        return view('portfolio');
    }

    public function faqs() {
        return view('faqs');
    }
    public function privacyPolicy() {
        return view('privacy-policy');
    }
    public function team() {
        return view('team');
    }

    public function blog() {
        return view('blog');
    }

    public function blogGrid() {
        $blog = Blog::active()->orderBy('id', 'desc')->get();
        return view('blog-grid')->with(['blogs' => $blog]);
    }

    public function blogSingle($title) {
        $blogRandom = Blog::active()->inRandomOrder()->limit(5)->get();
        $blog = Blog::active()->where('title', 'like', '%'.Str::title(str_replace('-', ' ', $title)).'%')->first();
        return view('blog-single')->with(['blog' => $blog, 'blogRandom' => $blogRandom]);
    }
}

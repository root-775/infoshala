<?php

namespace App\Http\Controllers;

use App\Models\Infoshala;
use Illuminate\Http\Request;

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

    public function blogGrid() {
        return view('blog-grid');
    }
    public function contact() {
        return view('contact');
    }
    public function portfolio() {
        return view('portfolio');
    }
    public function blogSingle() {
        return view('blog-single');
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
}

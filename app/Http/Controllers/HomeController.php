<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view('frontend.index');
    }
    public function services() {
        return view('frontend.services');
    }
    public function products() {
        return view('frontend.products');
    }
    public function blog() {
        return view('frontend.blog');
    }
    public function contacts() {
        return view('frontend.contacts');
    }
    public function productDetail() {
        return view('frontend.product-detail');
    }
}

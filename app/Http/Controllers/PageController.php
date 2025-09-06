<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about-us');
    }

    public function privacy() {
        return view('privacy-and-policy');
    }

    public function terms() {
        return view('term-and-condition');
    }
}

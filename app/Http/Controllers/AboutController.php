<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('portfolio.about');
    }

    public function about()
    {
        return view('admin.about');
    }
}

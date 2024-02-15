<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('portfolio.contact');
    }

    public function contact()
    {
        return view('admin.contact');
    }
}

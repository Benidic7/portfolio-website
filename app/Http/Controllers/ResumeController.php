<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        return view('portfolio.resume');
    }

    public function resume()
    {
        return view('admin.resume');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class PortfolioController extends Controller
{
    public function index()
    {
        $home = Home::first();
        return view('portfolio.home', compact('home'));
    }

    public function about()
    {
        return view('portfolio.about');
    }

    public function contact()
    {
        return view('portfolio.contact');
    }

    public function resume()
    {
        return view('portfolio.resume');
    }

    public function downloadCV()
    {
        $home = Home::first();
        $filePath = public_path('cv/'.$home->cv);

        return response()->download($filePath);
    }
}

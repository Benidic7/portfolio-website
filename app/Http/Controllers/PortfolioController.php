<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Home;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index()
    {
        $home = Home::first();
        return view('portfolio.home', compact('home'));
    }

    public function about()
    {
        $about = About::with(['contact', 'home'])->first();
        [$formattedDate, $age] = $this->dates($about);
        return view('portfolio.about', compact('about', 'formattedDate', 'age'));
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('portfolio.contact', compact('contact'));
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

    public function dates($about)
    {
        $date = $about->birth_date;
        $carbonDate = Carbon::createFromFormat('m/d/Y', $date);
        $formattedDate = $carbonDate->format('F d, Y');
        $age = $carbonDate->age;

        return [$formattedDate, $age];
    }
}
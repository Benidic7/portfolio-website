<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Home;
use App\Models\About;
use App\Models\Skill;
use App\Models\Resume;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
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
        $skills = Skill::all();
        [$formattedDate, $age] = $this->dates($about);
        return view('portfolio.about', compact('about', 'skills', 'formattedDate', 'age'));
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('portfolio.contact', compact('contact'));
    }

    public function resume()
    {
        // $id = Auth()->user()->id;
        $home = Home::first();
        $contact = Contact::first();
        $resume = Resume::first();
        $education = Education::get();
        $experience = Experience::get();
        return view('portfolio.resume', compact('home', 'contact', 'resume', 'education', 'experience'));
    }

    public function blog()
    {
        return view('portfolio.blogs');
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

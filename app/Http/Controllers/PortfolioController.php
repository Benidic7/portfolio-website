<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Home;
use App\Models\About;
use App\Models\Email;
use App\Models\Skill;
use App\Models\Resume;
use App\Mail\ContactMe;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    public function index()
    {
        $home = Home::first();
        $about = About::with(['contact', 'home'])->first();
        $skills = Skill::all();
        [$formattedDate, $age] = $this->dates($about);
        $resume = Resume::first();
        $education = Education::get();
        $experience = Experience::get();
        $blogs = Blog::all();
        $contact = Contact::first();
        $portfolio = Portfolio::all();
        return view('portfolio.home', compact('home', 'about', 'skills', 'resume', 'education', 'experience', 'formattedDate', 'age', 'contact', 'blogs', 'portfolio'));
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
        $blogs = Blog::all();
        return view('portfolio.blogs', compact('blogs'));
    }

    public function portfolio($id)
    {
        $home = Home::first();
        $portfolio = Portfolio::where('id', $id)->get();
        return view('portfolio.portfolio', compact('home', 'portfolio'));
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

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:5',
        ]);
        Mail::to('benidicespinosa30@gmail.com')->send(new ContactMe($data));

        Email::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->to('/#contact')->with('success', 'Message sent successfully');
    }
}

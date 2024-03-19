<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Home;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        if ($about) {
            [$formattedDate, $age] = $this->dates($about);
        } else {
            $formattedDate = null;
            $age = null;
        }
        return view('admin.about.index', compact('about', 'formattedDate', 'age'));
    }

    public function create()
    {
        $home = Home::first();
        $contact = Contact::first();
        return view('admin.about.create', compact('home', 'contact'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hi' => 'required|exists:homes,id',
            'ci' => 'required|exists:contacts,id',
            'birthdate' => 'required|date|before:today',
            'website' => 'required|url',
            'city' => 'required',
            'degree' => 'required',
            'freelance' => 'required'
        ]);

        $home = Home::first();
        $name = $home->first_name;

        About::create([
            'home_id' => $request->hi,
            'contact_id' => $request->ci,
            'birth_date' => $request->birthdate,
            'website' => $request->website,
            'city' => $request->city,
            'degree' => $request->degree,
            'freelance' => $request->freelance
        ]);

        return redirect()->route('about.index')->with('success', 'About info of <b>'. $name .'</b>has been created successfully!');
    }

    public function edit(string $id)
    {
        $home = Home::first();
        $contact = Contact::first();
        $about = About::where('id', $id)->first();
        return view('admin.about.edit', compact('home', 'contact', 'about'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'hi' => 'required|exists:homes,id',
            'ci' => 'required|exists:contacts,id',
            'birthdate' => 'required|date|before:today',
            'website' => 'required|url',
            'city' => 'required',
            'degree' => 'required',
            'freelance' => 'required'
        ]);

        $about = About::findOrFail($id);
        $name = $about->home->first_name;

        $about->update([
            'home_id' => $request->hi,
            'contact_id' => $request->ci,
            'birth_date' => $request->birthdate,
            'website' => $request->website,
            'city' => $request->city,
            'degree' => $request->degree,
            'freelance' => $request->freelance
        ]);

        return redirect()->route('about.index')->with('success', 'The about info of <b>'. $name .'</b> has been updated successfully!');
    }

    public function destroy(string $id)
    {
        $about = About::findOrFail($id);
        $name = $about->home->first_name;
        $about->delete();

        return response()->json(['success' => 'The about info of <b>'. $name .'</b> has been deleted successfully!']);
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

<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Resume;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResumeController extends Controller
{
    public function index()
    {
        $id = Auth()->user()->id;
        $home = Home::first();
        $contact = Contact::first();
        $resume = Resume::first();
        $education = Education::with('user')->where('user_id', $id)->get();
        $experience = Experience::with('user')->where('user_id', $id)->get();
        return view('admin.resume.index', compact('home', 'contact', 'resume', 'education', 'experience'));
    }

    public function create()
    {
        $home = Home::all();
        return view('admin.resume.create', compact('home'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hi' => 'required|exists:homes,id',
            'summary' => 'required|min:15|max:500',
        ]);

        $home = Home::findOrFail($request->hi);

        Resume::create([
            'home_id' => $request->hi,
            'summary' => $request->summary,
        ]);

        return redirect()->route('resume.index')->with('success', 'You have successfully added a summary to <b>'. $home->first_name .'</b>');
    }


    public function edit($id)
    {
        $home = Home::first();
        $resume = Resume::findOrFail($id);
        return view('admin.resume.edit', compact('home', 'resume'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hi' => 'required',
            'summary' => 'required|min:15|max:500',
        ]);

        $resume = Resume::findOrFail($id);
        $name = Auth()->user()->name;

        $resume->update([
            'hi' => $request->hi,
            'summary' => $request->summary,
        ]);

        return redirect()->route('resume.index')->with('success', '<b>'.$name.'\'s</b> summary has been updated successfully!');
    }

    public function destroy($id)
    {
        $resume = Resume::findOrFail($id);
        $resume->delete();
        $name = $resume->home->first_name;

        return response()->json(['success' => '<b>'.$name.'\'s</b> summary has been updated successfully!']);
    }
}

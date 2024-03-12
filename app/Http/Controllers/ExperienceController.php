<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ExperienceController extends Controller
{

    public function create()
    {
        return view('admin.experience.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'experience' => 'required',
            'year' => 'required',
            'address' => 'required',
            'description' => 'required'
        ]);

        $name = Session::get('USERNAME');

        Experience::create([
            'user_id' => Session::get('USERID'),
            'experience' => $request->experience,
            'year' => $request->year,
            'address' => $request->address,
            'description' => $request->description,
        ]);

        return redirect()->route('resume.index')->with('exp', 'Experience info of <b>'. $name .'</b> has been created successfully!');
    }

    public function edit(string $id)
    {
        $experience = Experience::where('id', $id)->first();
        return view('admin.experience.edit', compact('experience'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'experience' => 'required',
            'year' => 'required',
            'address' => 'required',
            'description' => 'required'
        ]);

        $experience = Experience::findOrFail($id);
        $name = $experience->user->name;

        $experience->update([
            'user_id' => Session::get('USERID'),
            'experience' => $request->experience,
            'year' => $request->year,
            'address' => $request->address,
            'description' => $request->description,
        ]);

        return redirect()->route('resume.index')->with('exp', 'The experience of <b>'. $name .'</b> has been updated successfully!');
    }

    public function destroy(string $id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();
        $name = $experience->user->name;

        return response()->json(['exp' => '<b>'. $name .'\'s </b> experience has been deleted successfully!']);
    }
}

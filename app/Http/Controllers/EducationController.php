<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{

    public function create()
    {
        return view('admin.education.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'level' => 'required',
            'school' => 'required',
            'year' => 'required',
            'address' => 'required',
        ]);

        $name = Auth()->user()->name;

        Education::create([
            'user_id' => Auth()->user()->id,
            'level' => $request->level,
            'school' => $request->school,
            'year' => $request->year,
            'address' => $request->address,
        ]);

        return redirect()->route('resume.index')->with('education', 'Education info of <b>'. $name .'</b> has been created successfully!');
    }

    public function edit(string $id)
    {
        $education = Education::findOrFail($id);
        return view('admin.education.edit', compact('education'));
    }

    public function update(Request $request, string $id)
    {
        $education = Education::findOrFail($id);

        $request->validate([
            'level' => 'required',
            'school' => 'required',
            'year' => 'required',
            'address' => 'required',
        ]);

        $name = Auth()->user()->name;

        $education->update([
            'user_id' => Auth()->user()->id,
            'level' => $request->level,
            'school' => $request->school,
            'year' => $request->year,
            'address' => $request->address
        ]);

        return redirect()->route('resume.index')->with('education', 'Education info of <b>'. $name .'</b> has been updated successfully!');
    }

    public function destroy(string $id)
    {
        $education = Education::findOrFail($id);
        $education->delete();
        $name = $education->user->name;

        return response()->json(['education' => 'Education info of <b>'. $name .'</b> has been deleted successfully!']);
    }
}
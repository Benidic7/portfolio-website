<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills.index', compact('skills'));
    }

    public function create()
    {
        $skill = Skill::get();
        return view('admin.skills.create', compact('skill'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'skills' => 'required',
            'percentage' => 'required|numeric',
            'description' => 'nullable'
        ]);

        Skill::create([
            'user_id' => Session::get('USERID'),
            'skills' => $request->skills,
            'percentage' => $request->percentage,
            'description' => $request->description
        ]);

        return redirect()->route('skills.index')->with('success', 'You have added <b>'.$request->skills.'</b> to your skills!');
    }

    public function show($id)
    {
        $skill = Skill::where('id', $id)->first();
        return view('admin.skills.show', compact('skill'));
    }

    public function edit($id)
    {
        $skill = Skill::where('id', $id)->first();
        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'skills' => 'required',
            'percentage' => 'required',
            'description' => 'nullable'
        ]);

        $skill = Skill::findOrFail($id);

        $skill->update([
            'skills' => $request->skills,
            'percentage' => $request->percentage,
            'description' => $request->description
        ]);

        return redirect()->route('skills.index')->with('success', '<b>'.$request->skills.'</b> skills has been updated successfully!');
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return response()->json(['success' => '<b>'.$skill->skills.'</b> has been deleted successfully!']);
    }
}

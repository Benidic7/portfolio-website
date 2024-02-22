<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('admin.dashboard');
    }

    public function home()
    {
        $home = Home::first();
        return view('admin.home.index', ['home' => $home]);
    }

    public function create()
    {
        return view('admin.home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'position' => 'required',
            'description' => 'required|min:30|max:500',
            'cv' => 'nullable|mimes:pdf|file|max:10240',
            'propic' => 'required|mimes:jpeg,jpg,png'
        ]);

        $fileName = null;

        if($request->hasFile('cv')){
            $fileName = $request->cv->getClientOriginalName();
            $request->cv->move(public_path('cv'), $fileName);
        }
        if($request->has('propic')){
            $imgName = $request->propic->getClientOriginalName();
            $request->propic->move(public_path('images'), $imgName);
        }

        Home::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'position' => $request->position,
            'description' => $request->description,
            'cv' => $fileName,
            'propic' => $imgName
        ]);

        return redirect()->route('admin.home')->with('success', '<b>'. $request->first_name . '\'s </b> information has been created successfully!');
    }

    public function edit($id)
    {
        $home = Home::find($id);
        return view('admin.home.edit', compact('home'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'position' => 'required',
            'description' => 'required|min:30|max:500',
            'cv' => 'nullable|mimes:pdf|file|max:10240',
            'propic' => 'required|mimes:jpeg,jpg,png'
        ]);

        $home = Home::find($id);

        if($request->hasFile('cv')){
            $fileName = $request->cv->getClientOriginalName();;
            $request->cv->move(public_path('cv'), $fileName);
            $home->cv = $fileName;
        }
        if($request->has('propic')){
            $imgName = $request->propic->getClientOriginalName();
            $request->propic->move(public_path('images'), $imgName);
            $home->propic = $imgName;
        }

        $home->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'position' => $request->position,
            'description' => $request->description,
        ]);

        return redirect('admin/home')->with('success', '<b>'. $home->first_name . '\'s </b> info has been updated successfully!');
    }

    public function destroy($id)
    {
        $home = Home::find($id);
        $homeName = $home->first_name;
        $home->delete();
        return response()->json(['success' => '<b>'. $homeName . '\'s </b> info has been deleted successfully!']);
    }

}

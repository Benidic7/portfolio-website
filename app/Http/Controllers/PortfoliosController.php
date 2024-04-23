<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfoliosController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'category' => 'required',
            'client' => 'required|string',
            'project_date' => 'required|date|before:today',
            'project_description' => 'required'
        ]);

        Portfolio::create([
            'title' => $request->title,
            'category' => $request->category,
            'client' => $request->client,
            'project_date' => $request->project_date,
            'project_description' => $request->project_description
        ]);

        return redirect()->route('portfolio.index')->with('success', 'You have successfully added a portfolio');
    }

    public function show(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.show', compact('portfolio'));
    }

    public function edit(string $id)
    {
        $portfolio = Portfolio::where('id', $id)->first();
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'category' => 'required',
            'client' => 'required|string',
            'project_date' => 'required|date|before:today',
            'project_description' => 'required'
        ]);

        $portfolio = Portfolio::findOrFail($id);
        $title = $portfolio->title;

        $portfolio->update([
            'title' => $request->title,
            'category' => $request->category,
            'client' => $request->client,
            'project_date' => $request->project_date,
            'project_description' => $request->project_description
        ]);

        return redirect()->route('portfolio.index')->with('success', 'You have successfully updated <b>' .$title. '</b> portfolio');
    }

    public function destroy(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();
        $title = $portfolio->title;

        return response()->json(['success' => '<b>'.$title.'</b> portfolio has been successfully deleted!']);
    }
}

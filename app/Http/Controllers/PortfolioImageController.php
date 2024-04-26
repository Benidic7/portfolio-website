<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\PortfolioImage;
use App\Http\Controllers\Controller;

class PortfolioImageController extends Controller
{
    public function index($portfolioId)
    {
        $portfolio = Portfolio::findOrFail($portfolioId);
        $portfolioImages = PortfolioImage::where('portfolio_id', $portfolioId)->get();
        return view('admin.portfolio-image.index', compact('portfolio', 'portfolioImages'));
    }

    public function store(Request $request, $portfolioId)
    {
        $request->validate([
            'images.*' => 'required|mimes:png,jpg,jpeg,webp'
        ]);

        $portfolio = Portfolio::findOrFail($portfolioId);

        $imageData = [];
        if($files = $request->file('images'))
        {
            foreach($files as $file){
                $img_WithExt = $file->getClientOriginalName();
                $img_filename = str_replace(' ', '_', pathinfo($img_WithExt, PATHINFO_FILENAME));
                $extension = $file->getClientOriginalExtension();
                $filename = $img_filename. '-' .time(). '.' . $extension;
                $file->storeAs('public/uploads/', $filename);

                $imageData[] = [
                    'portfolio_id' => $portfolio->id,
                    'image' => $filename
                ];
            }
        }

        PortfolioImage::insert($imageData);

        return redirect()->back()->with('success', 'Uploaded Successfully');
    }
}

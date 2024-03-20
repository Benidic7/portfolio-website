<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string',
            'title' => 'required|string',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);

        if($validated){
            $now = new \DateTime('NOW');
            $date = $now->format('m-d-Y_H.i.s');

            if($request->hasFile('image')){
                $image_withExt = $request->file('image')->getClientOriginalName();
                $image_name = str_replace(' ', '_', pathinfo($image_withExt, PATHINFO_FILENAME));
                $image_ext = $request->file('image')->getClientOriginalExtension();
                $image = $image_name. '-' . $date . '.' . $image_ext;
                $image_path = $request->file('image')->storeAs('public/uploads/'. $image);
            }

            $blog = Blog::create([
                'category' => $request->category,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image
            ]);

            if($blog){
                return redirect()->route('blog.index')->with('success', 'You have been posted <strong>' .$request->title.'</strong> blog');
            }
        }
    }

    public function show($id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('admin.blog.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
         $validated = $request->validate([
            'category' => 'required|string',
            'title' => 'required|string',
            'description' => 'required',
            'image' => 'sometimes|mimes:jpg,jpeg,png'
        ]);

        if($validated){
            $blog = Blog::findOrFail($id);

            $now = new \DateTime('NOW');
            $date = $now->format('m-d-Y_H.i.s');

            if($request->hasFile('image')){
                $image_withExt = $request->file('image')->getClientOriginalName();
                $image_name = str_replace(' ', '_', pathinfo($image_withExt, PATHINFO_FILENAME));
                $image_ext = $request->file('image')->getClientOriginalExtension();
                $image = $image_name. '-' . $date . '.' . $image_ext;
                $image_path = $request->file('image')->storeAs('public/uploads/'. $image);
                $blog->image = $image;
            } else if($request->hasFile('edit_image')){
                $image = $request->file('edit_image');
                $blog->image = $image;
            }

            $blog = $blog->update([
                'category' => $request->category,
                'title' => $request->title,
                'description' => $request->description,
            ]);

            if($blog){
                return redirect()->route('blog.index')->with('success', '<strong>' .$request->title.'</strong> has been successfully updated!');
            }
        }
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return response()->json([
            'success' => '<strong>'.$blog->title.'</strong> blog has been successfully deleted!',
            'blog' => $blog
        ]);
    }
}

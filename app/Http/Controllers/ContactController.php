<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::with('home')->first();
        return view('admin.contact.index', compact('contact'));
    }

    public function create()
    {
        $home = Home::all();
        return view('admin.contact.create', compact('home'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hi' => 'required|exists:homes,id',
            'email' => 'required|email',
            'phone' => 'required|regex:/(09)[0-9]{9}/',
            'address' => 'required',
            'zipcode' => 'required|min:4|integer',
        ]);

        Contact::create([
            'home_id' => $request->hi,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'zip_code' => $request->zipcode
        ]);

        return redirect()->route('contact.index')->with('success', 'Contact created successfully!');
    }

    public function edit(string $id)
    {
        $home = Home::all();
        $contact = Contact::where('id', $id)->first();
        return view('admin.contact.edit', compact('home', 'contact'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'hi' => 'required|exists:homes,id',
            'email' => 'required|email',
            'phone' => 'required|regex:/(09)[0-9]{9}/',
            'address' => 'required',
            'zipcode' => 'required|min:4|integer',
        ]);

        $contact = Contact::findOrFail($id);
        $contactOwner = $contact->home->first_name;

        $contact->update([
            'home_id' => $request->hi,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'zip_code' => $request->zipcode
        ]);

        return redirect()->route('contact.index')->with('success', 'The contact of <b>'. $contactOwner .'</b> has been updated successfully!');
    }

    public function destroy(string $id)
    {
        $contact = Contact::find($id);
        $contactOwner = $contact->home->first_name;
        $contact->delete();

        return response()->json(['success' => 'The contact of <b>'. $contactOwner .'</b> has been deleted successfully!']);
    }
}

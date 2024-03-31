<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        $emails = Email::all();
        return view('admin.email.index', compact('emails'));
    }

    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        $email = Email::findOrFail($id);
        $email->delete();

        return response()->json(['success' => 'Conversation moved to trash.']);
    }
}

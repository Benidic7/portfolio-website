<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        $emails = Email::latest()->paginate(10);
        $this->formattedCreatedAt($emails);
        return view('admin.email.index', compact('emails'));
    }

    public function show($id)
    {
        $email = Email::where('id', $id)->first();
        $email->created_at_formatted = Carbon::parse($email->created_at)->format('d M. Y h:i A');
        return view('admin.email.show', compact('email'));
    }

    public function destroy($id)
    {
        $email = Email::findOrFail($id);
        $email->delete();

        return response()->json(['success' => 'Conversation moved to trash.']);
    }

    public function formattedCreatedAt($emails)
    {
        foreach ($emails as $email) {
            $currentDateTime = Carbon::now();
            $createdAt = Carbon::parse($email->created_at);
            $minutesDifference = $currentDateTime->diffInMinutes($createdAt);

            if($minutesDifference < 1){
                $secondsDifference = $currentDateTime->diffInSeconds($createdAt);
                $email->formatted_created_at = $secondsDifference . ' seconds ago';
            } elseif ($minutesDifference < 60) {
                $email->formatted_created_at = $minutesDifference . ' minutes ago';
            } elseif ($minutesDifference < 1440) {
                $hoursDifference = $currentDateTime->diffInHours($createdAt);
                $email->formatted_created_at = $hoursDifference . ' hours ago';
            } else {
                $daysDifference = $currentDateTime->diffInDays($createdAt);
                $email->formatted_created_at = $daysDifference . ' days ago';
            }
        }
    }
}

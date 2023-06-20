<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Reminder;
use App\Models\User;

class MailController extends Controller
{   
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function sendMail(Request $request)
    {
        $user = $request->user();
        $posts = $user->posts()->where('user_id', $user->id)->get();

        foreach ($posts as $post) {
            $setTime = $post->time;
            $setDate = $post->date;
    
            $formattedDate = $setDate;

            // Create a new DateTime object for the user-set time and date
            $customTime = new DateTime($formattedDate . ' ' . $setTime);

            // Calculate the remaining time
            $currentTime = new DateTime();
            $remainingTime = $customTime->getTimestamp() - $currentTime->getTimestamp();

            // Check if remaining time is 4 hours and current time matches the desired time
            if ($remainingTime <= 14400 && $remainingTime > 0) {
                // Send email when remaining time is 4 hours and current time matches desired time
                Mail::to($user->email)->send(new Reminder('You have a meeting at ' . $setTime));
            }
        }

        return view('home');
    }
}

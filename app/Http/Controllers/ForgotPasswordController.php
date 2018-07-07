<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Reminder;
use Mail;
use Sentinel;

class ForgotPasswordController extends Controller
{
    public function postForgotPassword(Request $request)
    {
    	$user = User::whereEmail($request->email)->first();
    	$sentinelUser = Sentinel::findById($user->id);
        
    	if(($user) == null)
    		return redirect()->back()->with(['success' => 'Reset code was sent to your email']);
    	$reminder = Reminder::exists($sentinelUser) ?: Reminder::create($sentinelUser);
    	$this->sendEmail($user, $reminder->code);
    	return redirect()->back()->with(['success' => 'Reset code was sent to your email']);
    }

    public function resetPassword($email, $resetCode)
    {
        $user = User::byEmail($email);

        if(($user) == null )
            abort(404);
        $sentinelUser = Sentinel::findById($user->id);

        if($reminder = Reminder::exists($sentinelUser))
        {
            if($resetCode == $reminder->code)
                return view('authentication.reset-password');
            else
                return redirect('/register');
        }
        else
        return redirect('/register');
    }

    public function postResetPassword(Request $request, $email, $resetCode)
    {
        $this->validate($request, [
            'password' => 'confirmed|required|min:5|max:10',
            'password_confirmation' => 'required|min:5|max:10'
        ]);

        $user = User::byEmail($email);

        if(($user) == null )
            abort(404);
        $sentinelUser = Sentinel::findById($user->id);

        if($reminder = Reminder::exists($sentinelUser))
        {
            if($resetCode == $reminder->code)
            {
                Reminder::complete($sentinelUser, $resetCode, $request->password);

                return redirect('/register')->with('success', 'Reset password success !');
            }
            else
            {
                return redirect('/register');
            }
        }
        else
        return redirect('/register');
    }

    private function sendEmail($user,$code)
    {
        Mail::send('emails.forgot-email',[
            'user' => $user,
            'code' => $code
        ], function($message) use ($user) 
        {
            $message->to($user->email);
            $message->subject("Hello $user->name, activate your email.");
        });
    }

}

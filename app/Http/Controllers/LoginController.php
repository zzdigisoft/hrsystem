<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class LoginController extends Controller
{
    public function login()
    {
    	return view('profiles.create');
    }

    public function postLogin(Request $request)
    {
        try
        {
            if(Sentinel::authenticate($request->all()))
            {
                return redirect('/profiles');
            }
            else
            {
                return redirect()->back()->with(['error' => 'Your username or password is incorrect']);
            }
        }
        catch(ThrottlingException $e)
        {
            $delay = $e->getDelay();

            return redirect()->back()->with(['error' => "You are banned for $delay seconds."]);
        }
        catch(NotActivatedException $e)
        {
            return redirect()->back()->with(['error' => 'Your account is not activated !']);
        }
    }

    public function logout()
    {
    	Sentinel::logout();
    	return redirect('/register');
    }

    public function showCuti()
    {
        return view('cuti.show');
    }
}

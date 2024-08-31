<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(Request $request) {

        $credentials = $request->only('email', 'password');
        $remember = $request->get('remember');
        
        if (Auth::attempt($credentials, $remember)) {
            // TODO delete oldest session if session match more...
            // auth()->user()->sessions()->select('id', 'ip_address', 'user_agent', 'last_activity')->get()
            // dd(Auth::user()->sessions()->select('last_activity')->get());
            // dd(Auth::user()->sessions()->select('last_activity')->min('last_activity'));
            // dd(Auth::user()->sessions()->selectRaw('min(last_activity as last_activity)')->get());
            // $userSections = Auth::user()->sessions()->select('last_activity')->get();
            // $userSectionsCount = $userSections->count();
            // dump($userSections);
            // dd($userSectionsCount);
            return redirect()->intended('/');
        }

        return back()->withInput()->withErrors(['invalidCredentials' => 'Invalid credentials. Please try again.']);
    }
}

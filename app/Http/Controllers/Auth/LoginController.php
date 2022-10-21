<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

//        $credentials = $request->only('email', 'password');
//        $credentials = [];
//        $credentials['USER_EMAIL'] = $request->get('email');
//        $credentials['USER_PASSWORD'] = $request->get('password');
//        dd(Auth::attempt($credentials));

//        if (Auth::attempt($credentials)) {
//            return redirect()->intended(RouteServiceProvider::HOME)
//                ->withSuccess('Signed in');
//        }

//        return redirect("login")->withErrors(['email' => 'Login details are not valid']);
        $pwd = md5($request->password) . '771548ab5f32c9da803176a6ddae3d7c';
        $user = User::where('USER_EMAIL', $request->email)
            ->where('USER_PASSWORD', $pwd)
            ->first();
//        dd($user);
        if ($user) {
            Auth::login($user);
            return redirect(RouteServiceProvider::HOME)->withSuccess('Signed in');
        }
        return redirect('/login')->withErrors(['email' => 'Login details are not valid']);
    }
}

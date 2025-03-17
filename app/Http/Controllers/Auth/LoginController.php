<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string', //Validasi kolom username
            // tapi kolom ini juga bisa berisi email atau username
            'password' => 'required|string|min:6',
            ]);

            // Pengecekan, jika inputan dari username formatnya email atau username

            $logintype = filter_var($request->username, FILTER_VALIDATE_EMAIL)?'email':'username';

            $login = [
                $logintype => $request->username,
                'password' => $request->password
            ];

            //Lakukan Login

            if (auth()->attempt($login)) {
                // Jika berhasil, maka redirect ke page home
                return redirect()->route('home');
            }
            // Jika salah. kembali ke halaman login
            return redirect()->route('login')->with(['error' => 'Email/Password Salah!']) ;
    }
}

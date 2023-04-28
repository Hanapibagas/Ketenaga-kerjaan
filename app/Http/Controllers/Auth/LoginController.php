<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;
    protected $redirectTo;
    public function redirectTo()
    {
        switch (Auth::user()->roles) {
            case "admin web";
                $this->redirectTo = '/dashboard';
                return $this->redirectTo;
                break;
            case "admin super";
                $this->redirectTo = '/admin-super';
                return $this->redirectTo;
                break;
            case "kab/kota";
                $this->redirectTo = '/admin-kab-kota';
                return $this->redirectTo;
                break;
            case "masyarakat";
                $this->redirectTo = '/admin-masyarakat';
                return $this->redirectTo;
                break;
        }
    }
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
}

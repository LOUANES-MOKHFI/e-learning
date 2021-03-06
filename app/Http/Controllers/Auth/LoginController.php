<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
   
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        //$this->middleware('guest')->except('logout');
    }

    protected function validator(array $data){

        return validator::make($data,[
        'name'  => 'required|max:255',
        'email' => 'required|max:255|max:255|unique:users',
        'password' => 'required|confirmed|min:6',
        ]);
    }

    protected function create(array $data){
        return User::create([
            'name'  => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }
}

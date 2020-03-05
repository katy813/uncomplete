<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
        public function index()
        {
            return view('pages.login');
        }

        public function registration()
        {
            return view('pages.registration');
        }

        public function postLogin(Request $request)
        {
            request()->validate([

            'email' => 'required',
            'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->intended('loggedin');
            }
            return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
        }

        public function postRegistration(Request $request)
        {
            request()->validate([

            'Firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',

            ]);

            $data = $request->all();

            $check = $this->create($data);

            return Redirect::to("loggedin")->withSuccess('Great! You have Successfully logged in');
        }


        public function create(array $data)
        {
          return User::create([
            'Firstname' => $data['Firstname'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2

          ]);
        }

        public function logout() {
            Session::flush();
            Auth::logout();
            return Redirect('/');
        }

}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Admin;
Use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthadminController extends Controller
{

        public function index()
        {
            return view('admins.adminlogin');
        }

        public function addadmin()
        {
            return view('admins.addadmin');
        }

        public function postLogin(Request $request)
        {
            request()->validate([
            'username' => 'required',
            'password' => 'required',
            ]);

            $credentials = $request->only('username', 'password');
            if (Auth::attempt($credentials)) {
                // Authentication passed...
                if(Auth::guard()->user()->role_id == 1){
                 return redirect()->intended('dashboard');

                }else{
                $this->adminlogout();
                }
            }
            return Redirect::to("adminlogin")->withSuccess('Oppes! You have entered invalid credentials');
        }

        public function postaddition(Request $request)
        {
            request()->validate([
            'username' => 'required',
            'password' => 'required|min:6',
            ]);

            $data = $request->all();

            $check = $this->create($data);

            return Redirect::to("admins-dashboard")->withSuccess('Great! You have Successfully created new admin');
        }

        public function create(array $data)
        {
          return User::create([
            'Firstname' => $data['Firstname'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 1
          ]);
        }

        public function adminlogout() {
            Session::flush();
            Auth::logout();
            return Redirect('adminlogin');
        }
}

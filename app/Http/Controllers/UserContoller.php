<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use Validator,Redirect,Response,File;
use PDF;

class UserController extends Controller
{
    //
    public function profile(){
    	return view('pages.profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){

                  if ( $request->file('file')) {
                        $imagefile = date('YmdHis') . "." . $request->file('file')->extension();

                        $request->file('file')->move(public_path('image'), $imagefile);
                  }

                          		$user = Auth::user();
                          		$user->userimage = $filename;
                          		$user->save();

                  return view('pages.profile', array('user' => Auth::user()) );

        }
}

<?php
namespace App\Http\Controllers;

class PagesController extends Controller{
public function getIndex() {
  return view('pages.welcome');
}
public function getprofile() {
  return view('pages.profile');
}
public function getdashboard() {
  return view('pages.dashboard');
}

public function getitemsdashboard() {
  return view('pages.items-dashboard');
}

public function getCharitySeasonsDashboard() {
  return view('pages.charity-seasons-dashboard');
}

public function getAdminsDashboard() {
  return view('pages.admins-dashboard');
}

public function getafterlogin() {
  return view('pages.loggedin');
}

public function getseasonpage() {
  return view('pages.charityseason');
}
public function getcatpage() {
  return view('pages.Categories');
}

}

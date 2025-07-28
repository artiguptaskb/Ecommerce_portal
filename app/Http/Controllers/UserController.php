<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  function register()
  {

    return view('register');
  }
  function register1()
  {

    return view('register1');
  }
  function login()
  {

    return view('login');
  }
  function login1()
  {

    return view('login1');
  }
  // user Dashboard start here
  public function index()
  {
    return view('user.index');
  }


  public function history()
  {
    return view('user.order-history');
  }
  public function detail()
  {
    return view('user.detail');
  }
   public function setting()
  {
    return view('user/settings');
  }
}

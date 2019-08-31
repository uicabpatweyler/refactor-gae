<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Bouncer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      return view('home');
//      $rows = User::whereIsNot('superadmin')->get();
//      return $rows;
    }

    public function details()
    {
      $user = Auth::user();
      return $user->getAbilities();
    }
}

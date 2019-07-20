<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
    }
    public function about()
    {
        //$user = $user = Auth::user();
        $user = User::find (2);

        $user->name = 'Steve Joe';
        $user->delete();
        $users= User::all();
        //dd ($user);
        return view('about', ['users'=> $users]);
    }
}

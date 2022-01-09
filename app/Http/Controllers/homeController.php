<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //index

    public function index(Request $request){

        return view('home');
    }

    public function fitur(Request $request){

        return view('fitur');
    }

    public function download(Request $request){

        return view('download');
    }

    public function signup(Request $request){

        return view('signup');
    }
    public function signin(Request $request){

        return view('signin');
    }
    public function history(Request $request){

        return view('history');
    }
    public function dashboard(Request $request){

        return view('dashboard');
    }
    public function profile(Request $request){

        return view('profile');
    }
}

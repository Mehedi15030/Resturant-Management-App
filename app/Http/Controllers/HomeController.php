<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\food;

class HomeController extends Controller
{
    public function index()
    {
        $data=food::all();
        return view("home",compact("data"));
        
    }
    public function redirects()
    {
        $usertype=Auth::user()->usertype;
        $data=food::all();
        
        if($usertype=='1')
        {
            return view('Admin.Adminhome');
        }
        else
        {
            return view('home',compact("data"));
        }
    }
}

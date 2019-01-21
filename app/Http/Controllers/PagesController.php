<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Rhea';
        return view('welcome', compact('title'));
    }


    public function doctorpage(){
        return view('doctor.doctorpage');
    }

    //ADMIN
    //login
//    public function adminlogin(){
//        return view('admin.adminlogin');
//    }

    public function adminpage(){
        return view('admin.adminpage');
    }
}

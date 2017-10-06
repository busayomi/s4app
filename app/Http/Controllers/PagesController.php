<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
    	return view('pages.about');
    }

     public function dash(){
    	return view('pages.dashboard');
    }

     public function login(){
    	return view('pages.login');
    }

     public function new_report(){
    	return view('pages.new_report');
    }

     public function thanks(){
    	return view('pages.thanks');
    }
}

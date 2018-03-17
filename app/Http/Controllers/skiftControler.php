<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

class skiftControler extends Controller
{   
	public function index(){

  	return view('skift.index');
  	
  }
    public function hotel(){


      $user = DB::table('skift_news')->get();

  	return view('skift.hotel',['user' => $user]);
  	
  }

  public function latestnews(){

     $user = DB::table('skift_news')->get();

  	return view('skift.latestnews',['user' => $user]);
  	
  }

  
}

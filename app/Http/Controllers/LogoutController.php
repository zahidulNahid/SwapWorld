<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class LogoutController extends Controller
{
	public function index(Request $req){
        if($req->session()->has('id')){
            $req->session()->flush();
            return redirect('/login');
        }
   
    }
}
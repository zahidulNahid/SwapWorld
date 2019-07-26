<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Users;
use App\Profile;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UserRequest;
use DB;
use Validator;

class LoginController extends Controller{

    public function index(){
        return view('index');
    }
	
	public function loginView(){
    	return View('login');
	}

	public function checkLogin(Request $req){


        Validator::make($req->all(),[
            'email' => 'required|min:6',
            'password' => 'required'
            ])->validate();

    	$db = DB::table('users')
    	->where('email',$req->email)
    	->where('password',$req->password)
    	->first();
        //dd($db);

    	if ($db != null) {
    		
    		$user = DB::table('users')
    				->join('profile','users.userid','=','profile.userid')
    				->where('users.email',$req->email)
    				->first(); 

            $req->session()->put('id',$user->userId);

    		if ($db->type == 'Admin') {

    			return redirect()->route('Admin.index');
    			# code...
    		}else if ($db->type == 'User') {
    			# code...
    			return redirect()->route('User.index');
    		}
    	}else{
    		return redirect()->back()->with('message', "Wrong password !! Please try again..");
    	}
    }

	public function registrationView(){
    	return View('registration');
	} 

	public function checkRegistration(Request $req,ProfileRequest $r){
                
          $photo="";
          if($req->hasFile('profilePicture'))
            {

                $destinationPath = "profilePicture";
                $file = $req->file('profilePicture');
                $extension=$file->getClientOriginalExtension();
                $fileName = rand(0,100).".".$extension;
                $file->move($destinationPath,$fileName);
                $photo = $fileName;
            }
            else
            {
                dd('Error uploading file');
            }
            
            
        $type='User';
        //dd($photo);
    	date_default_timezone_set('Asia/Dhaka');
    	$lastLogin=date("Y-m-d h:i:s");

		   		$storeProfile = new Profile();
            	$storeProfile->fullName = $r->fullName;
            	$storeProfile->email = $r->email;
            	$storeProfile->phone = $r->phone;
            	$storeProfile->gender = $r->gender;
            	$storeProfile->profilePicture = $photo;
            	$storeProfile->password = $r->password;
            	$storeProfile->confirmPass = $r->confirmPass;
            	//dd($storeProfile);

            	$storeUser = new Users();
				$storeUser->email = $r->email;
				$storeUser->password = $r->password;
				$storeUser->type = $type;
				$storeUser->lastLogin = $lastLogin;
            
            	$storeUser->save();
           		$storeProfile->save();

    	 return redirect()->route('Login.loginView');
    }
}



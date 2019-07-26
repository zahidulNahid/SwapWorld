<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Requests\EmailRequest;
use DB;
use App\ForgotEmail;
use App\Users;
use App\Profile;

class MailController extends Controller {
   public function getMailPage(Request $req){
      return view('forgotPassword');
   }

   public function postMail(Request $req,EmailRequest $p){
         $extension = str_random(4);
         $fullPart = rand(0,100)."swap".$extension;
         // dd($fullPart);
         $post = new ForgotEmail();
         $post->email = $req->email;

         $post->save();

         $user = Users::where('email','=',$req->email)->first();
         // dd(count($user));
         // dd($userId);
         if($user <> null){
            $userId = $user->userId;
            $newPassForProfile = Profile::find($userId);
            $newPassForProfile->password = $fullPart;
            $newPassForProfile->confirmPass = $fullPart;
            $newPassForProfile->save();

            $newPass = Users::find($userId);
            $newPass->password = $fullPart;
            $newPass->save();

            $data = array('pswrd'=>$fullPart,'receiver_email'=>$req->email);

            Mail::send('mail', $data, function($message) use($data){
               $message->to($data['receiver_email'], 'User')->subject
                  ('Reset Password');
               $message->from('seniornurul@gmail.com','No Reply');
            });
      
            return redirect()->back()->with('message', "Password Reset Succefully !! A password has been sent to your email address and use it for login");
         }else{
            return redirect()->back()->with('message', "We are Sorry !! This email is not valid for our site.");
         }
         
   }
}

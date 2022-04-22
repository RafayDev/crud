<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class userController extends Controller
{
    public function userLogin(Request $request){
        
       $user = Login::where('email',$request->email)->where('password',$request->password)->first();
         if($user){
              session()->put('email',$request->email);
              return redirect('/dashboard');
         }
         else{
              return redirect('/');
         }
    //    echo '<pre.>';
    //    print_r($user);
    //    die;

      //  $email = $request['email'];
        //$password = $request['password'];
     // $password = $request->input('password');
        // $email = $request->input('email');
        // $request->session()->put('email',$email);
       // $request->session()->put('password',$password);
        // if($request->session()->has('email')){
        //     return redirect('/dashboard');
        // }
        // else{
        //     return redirect('/');
        }
        // $user = login::find(1);
 
        // if($user->email==session('email') && $user->password==session('password')){
        //     return redirect('/dashboard');
        // }
        // else{
        //     return redirect('/login');
        // }
 public function logout(){
     session()->pull('email', null);
     return redirect('/');

       
     
    }
}
   


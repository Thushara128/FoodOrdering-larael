<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class UsersController extends Controller
{
    //
    function register(Request $req){
        // $data=Loguser::where('email',$req->email);
        // if(!$data){
       $user=new user;
       $user->name=$req->name;
       $user->email=$req->email;
       $user->password=Hash::make($req->password);
       $user->save();
       return redirect('login');
        // }else{
        //     return $req->email."Already registerd";

        // }
    }
    function login(Request $req){
      
        $user = User::where(['email'=>$req->email])->first();
      
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "username and password is not matched";
        }else{
            $req->Session()->put('user',$user);
            return redirect('/');
        }
    }
}

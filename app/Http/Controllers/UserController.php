<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Usre name or password don't match";
        }
        else
        {
          $req->session()->put('user',$user);
            return redirect('/');
        }
        }
        function register (Request $req)
        {
            // return $req->input();
            $user = new User;
            $user->name=$req->name;
            $user->email=$req->email;
            $user->password=Hash::make($req->password);
            $user->save();
            return redirect('/login');

        }
    
}

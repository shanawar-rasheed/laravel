<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function Login()
    {
        return view('login');
    }
    // public function Register()
    // {
    //     return view('register');
    // }
   

    // public function save(Request $request)
    // {
    //     $std=new users;
        
    //     $std->name=$request->name;
    //     $std->email=$request->email;
    //     $std->password=Hash::make($request->password);
        
    //     $save=$std->save();

    //     if($save)
    //     {
    //         return back()->with('success','User are Successfully Register');
    //     }
    //     else
    //     {
    //         return back()->with('fail','Something Wrong');
    //     }
    // }


    public function check(Request $request)
    {
        $userinfo=users::where('email','=',$request->email)->where('role_id','=',1)->first();
       
        if(!$userinfo)
        {
            return back()->with('fail','Unable To login');
        }
        else
        {
            if (Hash::check($request->password,$userinfo->password))
            // if($request->password=$userinfo->password)
            {
                $request->session()->put('LoggedUser',$userinfo->id);
            return redirect('dashboard');
           
            
            }
            else
            {
            return back()->with('fail','Password is incorrect'); 
            }
        }
    }


}

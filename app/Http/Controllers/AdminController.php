<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function Register()
    {
        return view('landing');
    }
   

    public function save(Request $request)
    {
        $admin=new users;
        
        $admin->role_id=$request->role_id;
        $admin->role_name=$request->role_name;
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=Hash::make($request->password);
        
        $save=$admin->save();

        if($save)
        {
            return back()->with('success','User are Successfully Register');
        }
        else
        {
            return back()->with('fail','Something Wrong');
        }
    }




public function check_access($LoggedUser, $role_id)
    {

        $query = "SELECT * FROM users where id='$LoggedUser' AND role_id='$role_id'";
        $result = DB::select($query);

        if($result){
            return true;
        }

        return false;
    }

    public function page1(){

        if(!self::check_access(session('LoggedUser'), '1')){
            return "Premission denied";
        }

        return view('page1');
    }


    public function page2(){

        if(!self::check_access(session('LoggedUser'), '1')){
            return "Premission denied";
        }

        return view('page2');
    }
    public function page3(){

        if(!self::check_access(session('LoggedUser'), '3')){
            return "Premission denied";
        }

        return view('page3');
    }
}    

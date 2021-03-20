<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    // public function Login()
    // {
    //     return view('login');
    // }
    // public function Register()
    // {
    //     return view('register');
    // }
   

    // public function save(Request $request)
    // {
    //     $user=new users;
        
    //     $user->name=$request->name;
    //     $user->email=$request->email;
    //     $user->password=Hash::make($request->password);
        
    //     $save=$user->save();

    //     if($save)
    //     {
    //         return back()->with('success','User are Successfully Register');
    //     }
    //     else
    //     {
    //         return back()->with('fail','Something Wrong');
    //     }
    // }


    // public function check(Request $request)
    // {
    //     $userinfo=student::where('email','=',$request->email)->first();
       
    //     if(!$userinfo)
    //     {
    //         return back()->with('fail','Email is incorrect');
    //     }
    //     else
    //     {
    //         if (Hash::check($request->password,$userinfo->password))
    //         {
    //             $request->session()->put('LoggedUser',$userinfo->id);
    //         return redirect('landing');
           
            
    //         }
    //         else
    //         {
    //         return back()->with('fail','Password is incorrect'); 
    //         }
    //     }
    // }










//     public function check_access($LoggedUser, $role_id)
//     {

//         $query = "SELECT * FROM pages where user='$LoggedUser' AND access='$role_id'";
//         $result = DB::select($query);

//         if($result){
//             return true;
//         }

//         return false;
//     }

//     public function page1(){

//         if(!self::check_access(session('LoggedUser'), '1')){
//             return "Premission denied";
//         }

//         return view('page1');
//     }


//     public function page2(){

//         if(!self::check_access(session('LoggedUser'), '2')){
//             return "Premission denied";
//         }

//         return view('page2');
//     }
//     public function page3(){

//         if(!self::check_access(session('LoggedUser'), '3')){
//             return "Premission denied";
//         }

//         return view('page3');
//     }
    
    
    
    
 }

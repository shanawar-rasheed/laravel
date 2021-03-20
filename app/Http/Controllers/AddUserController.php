<?php

namespace App\Http\Controllers;
use App\Models\AddUser;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function AddUser()
    {
        return view('add-user');
    }
    public function createUser(Request $request)
    {
        $admin=new AddUser;
        $admin->role_id=$request->role_id;
        $admin->role_name=$request->role_name;
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=$request->password;
        $save=$admin->save();
        if($save)
        {
            return back()->with('success','User Are Successfully Register');
        }
        else
        {
            return back()->with('fail','User Are Successfully Register');
        }
    }
    public function getUser()
    {
        $user=AddUser::orderby('id','DESC')->get();
        return view('users',compact('user'));
    }

    public function getUserById($id)
    {
        $user=AddUser::where('id',$id)->first();
        return view('single-user',compact('user'));
    }

    public function deleteUser($id)
    {
        AddUser::where('id',$id)->delete();
        return back()->with('success',"User Successfully Deleted");
    }


    public function editUser($id)
    {
        $user=AddUser::find($id);
        return view('edit-user',compact('user'));
    }

    
    public function updateUser(Request $request)
    {
        $user=AddUser::find($request->id);

        $user->role_id=$request->role_id;
        $user->role_name=$request->role_name;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return back()->with('success',"User Successfully Updated");

    }
}







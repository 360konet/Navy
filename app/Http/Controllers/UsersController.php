<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function user(){
        $users = User::all();
        return view('admin.user.user', compact('users'));
    }

    public function add_user(Request $request){
        $user= new User();

        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->phone_number=$request->input('phone_number');
        $user->password=$request->input('password');

        $user->save();
        return redirect('/users');
    }

    public function remove_user($id){
        $user= User:: find($id);
        $user->delete();
        return redirect('/users');
    }
}

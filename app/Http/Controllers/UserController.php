<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function register(){
       return view('register_admin');
    }
    function create(Request $request){
      $validate = $this->valide($request,[
        'nama'=>'required|string',
        'alamat'=>'required|string',
        'no_telp'=>'required|string',
        'email'=>'required|string',
        'password'=>'required_with::confrim_password|min:8|same:confrim_password',
      ]);
      $validate['password']=bcrypt($request->password);
      User::create($validate);
      return redirect('login_admin');
    }
}

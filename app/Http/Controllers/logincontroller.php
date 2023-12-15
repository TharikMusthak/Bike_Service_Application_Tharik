<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class bikecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.login');

    }

   public function loginpost (Request $request){

    $cratitials=[
        'email'=>$request->email,
        'password'=>$request->password,
    ];
  if(Auth::attempt($cratitials)){

  return redirect('/upstox')->withmessage('successfully login'); }

  else {
    return view('auth.login');}

       }

       public function register(){

        return view('auth.register');
       }

public function store( Request  $request){

 $user=new User;

 $user->name=$request['name'];
 $user->email=$request['email'];
 $user->password=Hash::make($request['password']) ;
 $user->save();

 return redirect()->route('registerpost')->withMessage('successfully register');
}

}

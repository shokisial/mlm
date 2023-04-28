<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
   public function index(){
    return view('auth.register');
   }

   public function search_sponsorid(Request $request){
      $sponsor_id = $request->sponsor_id;
      $check = User::where(['username'=>$sponsor_id, 'status'=>1])->exists();
      if($check){
         $data = User::where(['username'=>$sponsor_id, 'status'=>1])->first();
         echo $data->first_name;
      }else{
         echo '0';
      }
   }

   public function store(Request $request)
   {
      $request ->validate([
         'sponsor_id'=>'required',
         'first_name'=>'required|min:2|max:25',
         'last_name'=>'required|min:2|max:25',
         'username'=>'required|unique:users',
         'email'=>'required|unique:users',
         'password'=>'required|confirmed|min:6',
         'username'=>'required',
         
      ]);
      
   }
}

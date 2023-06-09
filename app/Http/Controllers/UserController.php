<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
      
      $inputData = $request->validate([
        'username' => [ 'required' , Rule::unique('users' , 'username') ] ,
        'email' => [ 'required' , Rule::unique('users' , 'email') ] ,
        'password' => [ 'required' , 'min:8' , 'confirmed' ] ,
      ]);

      User::create([
        'username' => $inputData['username'] ,
        'email' => $inputData['email'] ,
        'password' => $inputData['password'] ,
      ]);

      return $inputData['username'] . " registered successfully with email " . $inputData['email'] . " and password " . $inputData['password'];
    }
}

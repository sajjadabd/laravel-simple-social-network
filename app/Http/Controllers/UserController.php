<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
      
      $inputData = $request->validate([
        'username' => 'required' ,
        'email' => 'required' ,
        'password' => 'required' ,
      ]);

      User::create([
        'username' => $inputData['username'] ,
        'email' => $inputData['email'] ,
        'password' => $inputData['password'] ,
      ]);
      
      return $inputData['username'] . " registered successfully with email " . $inputData['email'] . " and password " . $inputData['password'];
    }
}

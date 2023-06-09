<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
      $username = $request['username'];
      return "$username registered successfully";
    }
}

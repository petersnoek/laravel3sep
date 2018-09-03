<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    // http://localhost:8000/users -> open usercontroller, execute action "dood"
    public function dood() {

        $users = User::all();

        return view('users.list')->with('users', $users);
    }
}

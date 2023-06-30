<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginUser(Request $r) {
        $user_credentials = $r->only('username', 'password');

        if (Auth::attempt($user_credentials)) {
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['message'=>'Invalid username or password']);
        }
    }

    public function logoutUser() {
        Auth::logout();

        return redirect('/login');
    }

    public function attendeesUser(Request $r) {
        $user_credentials_validation = $r->validate([
            'name'=>'required',
            'username'=>'required|unique:users|min:4|max:8',
            'password'=>'required|min:8|max:20'
        ]);

        $user = User::create($user_credentials_validation);

        if($user){
            return redirect('/login');
        }
    }
}
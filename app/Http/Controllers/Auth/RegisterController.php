<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function __construct() 
    {
        $this->middleware(['guest']);
    }


    public function index() 
    {
        return view('auth.register');
    }

    public function store(Request $request) 
    {   
        //Validation
        $this->validate($request, [
            'fullname' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        //Store
        User::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //sign in
        auth()->attempt($request->only('email', 'password'));



        return redirect()->route('blogpost');
        //signin
        //redirect

    }
}

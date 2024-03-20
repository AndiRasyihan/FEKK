<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:10|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
            $validatedData['password'] = Hash::make($validatedData['password']);
            user::create($validatedData);

            return redirect('/');
    }
}

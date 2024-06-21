<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {

        return view("register.index", [
            'title' => 'Login'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'username' => ['required', 'min:5', 'max:15', 'unique:users'],
                'email' => ['required', 'email:dns', 'Unique:users'],
                'password' => ['required', 'min:8']
            ]
        );

        $validateData['password'] = Hash::make($validateData['password']);


        User::create($validateData);
        $request->session()->flash('success', 'Registrasi Success');

        return redirect('/login');
    }
}

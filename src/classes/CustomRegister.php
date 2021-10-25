<?php

namespace DevinGray\CustomAuth\Classes;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;

class CustomRegister
{
    public static function validationRules(): array
    {
        return [
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8'
        ];
    }

    public function showRegisterView()
    {
        return view('custom-auth::register');
    }

    public function createNewUser($request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }
}

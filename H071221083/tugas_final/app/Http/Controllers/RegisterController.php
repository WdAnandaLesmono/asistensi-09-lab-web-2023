<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Show the registration page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            "title" => "Register Page",
            "search" => "Search on NabStore",
        ];

        return view('register', $data);
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:64', 'unique:users'],
            'birthDate' => 'required|date',
            'email' => 'required|email|unique:users',
            'primary_phone_number' => 'required|numeric',
            'password' => 'required|min:8|max:255',
        ]);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successful! Please log in');
    }
}

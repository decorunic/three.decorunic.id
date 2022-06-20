<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'siteName' => 'Decorunic 3D Management',
            'title' => 'Login'
        ]);
    }

    public function loginAuthenticate()
    {
        
    }
    
    public function register()
    {
        return view('auth.register', [
            'siteName' => 'Decorunic 3D Management',
            'title' => 'Register'
        ]);
    }

    public function registerStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8', 'max:255'],
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('message', 'Registration succesfull! Please login');

        return redirect('/login')->with('message', 'Registration succesfull! Please login');
    }
}

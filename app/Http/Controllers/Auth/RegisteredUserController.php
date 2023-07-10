<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Controllers\Auth\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    public function checkEmailAvailability(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();

        if ($user) {
            return response()->json(['valid' => false, 'message' => 'The email address is already registered']);
        }

        return response()->json(['valid' => true]);
    }


    public function store(Request $request)
    {
        // Validate the incoming registration data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
        $name = $validatedData['first_name'].$validatedData['last_name'];
        // Create a new user with the validated data
        $user = User::create([
            'name' => $name,
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        event(new Registered($user));

        Auth::login($user);
        return response()->json(['success' => true]);
    }
}

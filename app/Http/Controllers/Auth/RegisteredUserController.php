<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }

    /**
     * Display the tourist registration view.
     */
    public function createTourist(): View
    {
        $religions = ['Catholic', 'Christian', 'Muslim', 'Other']; // Add more as needed
        return view('auth.register-tourist', compact('religions'));
    }

    /**
     * Handle an incoming tourist registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeTourist(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'birthday' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'primary_phone_number' => 'required|string|max:20',
            'secondary_phone_number' => 'nullable|string|max:20',
            'religion' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'country_of_origin' => 'required|string|max:255',
            'arrival_date' => 'required|date',
            'reason_to_visit' => 'required|string|max:255',
        ]);

        User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'primary_phone_number' => $request->primary_phone_number,
            'secondary_phone_number' => $request->secondary_phone_number,
            'religion' => $request->religion,
            'occupation' => $request->occupation,
            'country_of_origin' => $request->country_of_origin,
            'arrival_date' => $request->arrival_date,
            'reason_to_visit' => $request->reason_to_visit,
            'role' => 'tourist',
            'is_verified' => false,
        ]);

        return redirect()->route('login')->with('success', 'Tourist registration successful! Please wait for verification.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Register a new user.
     *
     * @return Application|\Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $attributes = request()->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Password::min(5), 'confirmed']
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/jobs');
    }
}

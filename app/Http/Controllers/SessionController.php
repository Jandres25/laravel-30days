<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class SessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return View
     */
    public function create(): View
    {
        return view('auth.login');
    }

     /**
     * Handle an incoming login request.
     *
     * @return RedirectResponse
      */
    public function store(): RedirectResponse
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials are incorrect.'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');
    }

     /**
     * Handle an incoming logout request.
     *
     * @return RedirectResponse
      */
    public function destroy(): RedirectResponse
    {
        Auth::logout();

        return redirect('/');
    }
}

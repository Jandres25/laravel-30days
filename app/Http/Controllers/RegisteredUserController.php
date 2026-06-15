<?php

namespace App\Http\Controllers;

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
     * Handle an incoming registration request.
     *
     * @return void
     */
    public function store()
    {
        //
    }
}

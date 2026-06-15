<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class SessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return View
     */
    public function create()
    {
        return view('auth.login');
    }

     /**
     * Handle an incoming login request.
     *
     * @return void
     */
    public function store()
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Secretaire;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/secretaire/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('secretaire.auth:secretaire');
    }

    /**
     * Show the Secretaire dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('secretaire.home');
    }

}

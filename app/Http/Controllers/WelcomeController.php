<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * GET
     * /welcome
     */
    public function __invoke() {
        return view('welcome');
    }
}

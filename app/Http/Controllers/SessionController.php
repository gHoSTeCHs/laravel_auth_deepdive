<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('auth.login');
    }
}

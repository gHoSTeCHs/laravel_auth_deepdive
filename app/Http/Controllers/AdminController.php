<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

/**
 * @method middleware(string $string)
 */
class AdminController extends Controller
{
    //

    public function index(): Factory|View|Application
    {
        return view('admin.index');
    }
}

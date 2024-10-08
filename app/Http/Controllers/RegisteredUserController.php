<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create(): Factory|View|Application
    {
        return (view('auth.register'));
    }

    public function store(Request $request): Application|Redirector|RedirectResponse
    {
        $attributes = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required', 'confirmed', Password::min(6)]
        ]);

        $user = User::create($attributes);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/profile');
    }
}

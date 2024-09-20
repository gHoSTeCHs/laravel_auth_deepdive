<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('auth.login');
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request): Application|Redirector|RedirectResponse
    {
        $userAttributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (!Auth::attempt($userAttributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match'
            ]);
        }

        $request->session()->regenerate();

        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect('/dashboard');
        }

        return redirect('/profile');
    }

    public function destroy(): Application|Redirector|RedirectResponse
    {
        Auth::logout();
        return redirect('/');
    }
}

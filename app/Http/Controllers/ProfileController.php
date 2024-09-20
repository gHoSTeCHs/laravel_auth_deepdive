<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View|Application
    {
        //
        $user = Auth::user();

        return view('user.index', ['user' => $user]);

    }

    /**
     * Update the specified resource in storage.
     * @throws ValidationException
     */
    public function update(Request $request)
    {
        //
        $attributes = $request->validate([
            'current_password' => ['required'],
            'password' => ['required', Password::min(6), 'confirmed']
        ]);

        if (!Hash::check($request->current_password, Auth::user()->password)) {
            throw ValidationException::withMessages([
                'password' => 'Wrong password'
            ]);
        };

        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        dd('Password updated');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserProfileController extends Controller
{
    public function show()
    {
        return view('pages.user-profile');
    }

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required', 'max:255', 'min:2'],
            'firstname' => ['required', 'max:100'],
            'lastname' => ['required', 'max:100'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id)],
            'address' => ['required', 'max:100'],
            'city' => ['required', 'max:100'],
            'country' => ['required', 'max:100'],
            'postal' => ['required', 'max:100'],
            'about' => ['required', 'max:255'],
            'tgl_lahir' => ['required'],
            'no_identity' => ['required'],
            'hp' => ['required', 'max:100']
        ]);

        auth()->user()->update([
            'username' => $request->get('username'),
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'postal' => $request->get('postal'),
            'about' => $request->get('about'),
            'tgl_lahir' => $request->get('tgl_lahir'),
            'no_identity' => $request->get('no_identity'),
            'hp' => $request->get('hp'),
        ]);
        return back()->with('success', 'Profile successfully updated');
    }
}

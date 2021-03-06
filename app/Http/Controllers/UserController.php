<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) abort(404);

        return view('user.profile', compact('user'));
    }




    public function edit()
    {
        // mengapa harus mendapatkan info user ? karna ini bagian mengedit
        $user = Auth::user();
        return view('user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => 'required|alpha_dash|min:3|max:15|unique:users,username,' . $user->id,
            'fullname' => 'max:30',
            'bio' => 'max:155',
            'avatar' => 'image|mimes:jpeg,jpg,png'
        ]);

        $imageName = $user->avatar;
        if ($request->avatar) {
            $avatar_img = $request->avatar;
            $imageName = $user->username . '-' . time() . '.' . $avatar_img->extension();
            $avatar_img->move(public_path('images/avatar'), $imageName);
        }

        $user->update([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'bio' => $request->bio,
            'avatar' => $imageName
        ]);

        return redirect('/home');
    }
}

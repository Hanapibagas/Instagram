<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit()
    {
        // mengapa harus mendapatkan info user ? karna ini bagian mengedit
        $user = Auth::user();
        return view('user.edit', compact('user'));
    }
}

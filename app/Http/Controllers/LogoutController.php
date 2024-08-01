<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    // public function store(Request $request)
    // {
    //     //validaciones
    //     $this->validate(
    //         $request,
    //         [
    //             'email' => 'required|email',
    //             'password' => 'required',
    //         ]
    //     );
    //     //Para comprobar si las credenciales es correcta
    //     if (!auth()->attempt($request->only('email', 'password'))) {
    //         return back()->with('mensaje', 'credenciales incorrectas');
    //     }

    //     return redirect()->route('posts.index', auth()->user()->username);
    // }
}

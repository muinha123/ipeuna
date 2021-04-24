<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('site.index');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json([
                'success' => true,
                'message' => 'Login successful',
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'Dados de acesso inválidos'
        ], 401);
    }

    public function logout()
    {
        try {
            Auth::guard('web')->logout();

            return response()->json([
                'message' => 'Login successful',
            ], 200);
        } catch (\Exception $e) {
            throw $e;
        }

    }
}

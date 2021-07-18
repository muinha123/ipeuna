<?php


namespace App\Http\Repositories\Auth;


use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginRepository
{
    public function login($request)
    {
        try {

            $credentials = $request->only('email', 'password');

            if (!Auth::attempt($credentials)) {
                throw ValidationException::withMessages(['password' => 'Senha Incorreta!!']);
            }

            return true;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}

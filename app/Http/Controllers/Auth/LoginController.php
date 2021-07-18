<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Auth\LoginRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * @var LoginRepository
     */
    protected $repository;

    /**
     * LoginController constructor.
     * @param LoginRepository $loginRepository
     */
    public function __construct(LoginRepository $loginRepository)
    {
        $this->repository = $loginRepository;
    }

    public function login()
    {
        return view('site.index');
    }

    public function authenticate(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $result = $this->repository->login($request);

            if (!empty($result)) {
                return response()->json([
                    'success' => true,
                    'message' => 'Login successful',
                ], 200);
            }

            return response()->json([
                'success' => false,
                'message' => 'Dados de acesso inválidos'
            ], 401);
        } catch (\Exception $e) {
            throw $e;
        }
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

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Auth\LoginRepository;
use App\Http\Repositories\Auth\RegisterRepository;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $repository;

    protected $loginrepository;

    public function __construct(
        RegisterRepository $registerRepository,
        LoginRepository $loginRepository
    )
    {
        $this->repository = $registerRepository;
        $this->loginrepository = $loginRepository;
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required'
            ]);

            $params = $request->all();

            $result = $this->repository->register($params);

            if (!empty($result)) {

                $auth = $this->loginrepository->login($request);

                if (empty($auth)) {
                    return response()->json([
                        'success' => false,
                        'message' => 'error',
                    ], 404);
                }

                return $this->responseCreated();
            }

            return $this->responseCreated();
        } catch (\Exception $e) {
            throw $e;
        }
    }
}

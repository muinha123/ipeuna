<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseAccepted()
    {
        return response()->json([], 202);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseNoContent()
    {
        return response()->json([], 204);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseCreated()
    {
        return response()->json([], 201);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function notFoundResponse()
    {
        return response()->json([
            'message' => 'Resource nor found'
        ], 404);
    }
}

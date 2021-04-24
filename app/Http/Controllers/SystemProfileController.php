<?php

namespace App\Http\Controllers;

use App\Models\SystemProfile;
use Illuminate\Http\Request;

class SystemProfileController extends Controller
{
    public function getAll(Request $request)
    {
        try {
            $results = SystemProfile::select(
                'id',
                'profile'
            )
                ->get();

            return response()->json([
                'results' => $results
            ], 200);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}

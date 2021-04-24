<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAll()
    {
        try {
            $results = User::select([
                'users.id',
                'users.name',
                'users.email',
                'sp.profile'
            ])
                ->join('system_profiles as sp', 'sp.id', '=', 'users.system_profile_id')
                ->paginate(20);

            return response()->json([
                'results' => $results
            ], 200);
        } catch (\Exception $e){
            throw $e;
        }
    }

    public function save (Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users'
            ]);

            $params = $request->except('_url');

            $result = User::create($params);

            if (!$result) {
                return $this->responseNoContent();
            }

            return $this->responseCreated();

        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function get (Request $request, $id)
    {
        try {
            $result = User::find($id);

            if (!$result) {
                $this->responseNoContent();
            }

            return response()->json([
                'results' => $result
            ], 200);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function update (Request $request, $id)
    {
        try {
            $params = $request->except('_url', '_method');
            $user = User::find($id);

            if (!$user) {
                return $this->notFoundResponse();
            }

            if (!$user->update($params)) {
                return $this->notFoundResponse();
            }

            return $this->responseAccepted();

        } catch (\Exception $e) {
            throw  $e;
        }
    }

    public function delete (Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return $this->notFoundResponse();
        }

        if (!$user->delete()) {
            return $this->notFoundResponse();
        }

        return $this->responseAccepted();
    }
}

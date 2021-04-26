<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SystemProfile;
use Illuminate\Http\Request;

class SystemProfileController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
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

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function get(Request $request, $id)
    {
        try {

            $result = SystemProfile::find($id);

            if (!$result) {
                return $this->responseNoContent();
            }

            return response()->json([
                'results' => $result
            ], 200);

        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function save(Request $request)
    {
        try {
            $request->validate([
                'profile' => 'required'
            ]);

            $params = $request->all();
            unset($params['_url'], $params['id']);

            $result = SystemProfile::create($params);

            if (!empty($result)) {
                return $this->responseNoContent();
            }

            return $this->responseCreated();

        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'profile' => 'required'
            ]);

            $params = $request->all();
            unset($params['_url'], $params['id']);

            $result = SystemProfile::find($id);

            if (!$result) {
                return $this->responseNoContent();
            }

            if (!$result->update($params)) {
                return $this->responseNoContent();
            }

            return $this->responseCreated();

        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function delete(Request $request, $id)
    {
        try {
            $result = SystemProfile::find($id);

            if (!$result) {
                return $this->responseNoContent();
            }

            if (!SystemProfile::destroy($id)) {
                return $this->responseNoContent();
            }

            return $this->responseAccepted();
        } catch (\Exception $e) {
            throw $e;
        }
    }
}

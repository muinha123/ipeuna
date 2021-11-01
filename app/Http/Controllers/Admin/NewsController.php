<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\NewsRepository;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class NewsController extends Controller
{
    /**
     * @param NewsRepository $repository
     */
    public function __construct(protected NewsRepository $repository)
    {
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws ValidationException
     */
    public function create(Request $request)
    {
        $params = $request->all();

        $validator = Validator::make($params, News::validateRules());
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $this->repository->create($params);

        return $this->responseCreated();
    }
}

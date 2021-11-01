<?php

namespace App\Http\Repositories;

use App\Models\News;

class NewsRepository
{
    /**
     * @param $params
     */
    public function create($params)
    {
        News::create($params);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'main_image'
    ];

    /**
     * @return string[]
     */
    public static function validateRules()
    {
        return [
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'main_image' => 'required'
        ];
    }
}

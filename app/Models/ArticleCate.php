<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCate extends Model
{
    protected $table = 'article_cate';
    protected $fillable = ['name', 'pid', 'create_time'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $table = 'games';

    protected $fillable = ['name', 'desc', 'picture_path', 'url', 'status', 'create_time'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAccessLog extends Model
{
    protected $table = 'user_access_log';

    protected $fillable = ['user_id', 'ip', 'url', 'add_time'];

    public $timestamps = false;

    public function getAddTimeAttribute($value)
    {
        return date('Y-m-d H:i:s',$value);
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class goods extends Model
{
    //关联的表
    public $table = 'goods';
    //关联的主键
    public $primaryKey = 'id';
    //是否自动维护created_at和updated_at
    public $timestamps = false;

    public $guarded = [];
}

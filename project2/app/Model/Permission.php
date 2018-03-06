<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //关联的表名
    public $table = 'permission';
//    表的主键
    public $primaryKey = 'id';

//    是否自动维护created_at和updated_at字段
    // public $timestamps = false;

    public $guarded = [];
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class web_conf extends Model
{
    //关联的表名
    public $table = 'web_conf';
    //表的主键
    public $primaryKey = 'id';
    //是否自动维护created_at和updated_at字段
    public $timestamps = true;

    public $guarded = [];
}

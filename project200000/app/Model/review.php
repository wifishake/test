<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class review extends Model
{
    //关联的表
    public $table = 'review';
    //关联的主键
    public $primaryKey = 'id';
    //是否自动维护created_at和updated_at
    public $timestamps = false;

    public $guarded = [];

    public function showinfo(){
        return $this->hasOne('App\Model\goods','reviewid');
//        return $this->hasOne('App\Model\user','reviewid');
    }
    public function showuser(){
        return $this->hasOne('App\Model\user','reviewid');
    }

    public function showval(){
        return $this->hasOne('App\Model\valence','reviewid');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberToken extends Model
{
    protected $table = "tb_members_token"; # 定义表名
    public $primaryKey = "id"; # 定义主键
    public $incrementing = true; # false代表非自增，默认有id且为int
    public $timestamps = true;

    public function Member(){
        return $this->belongsTo('App\Models\Members','mid','mid');
    }
}

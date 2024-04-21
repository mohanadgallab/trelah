<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = ['title','subtitle','paragraph','service_id','l_1','l_2','l_3','l_4','l_5','l_6','l_7','l_8','l_9','l_10','l_11','l_12','l_13'];

    public function service(){
        return $this->belongsTo(Service::class);
    }
}

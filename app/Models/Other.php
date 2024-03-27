<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    use HasFactory;
    protected $fillable = ['title','desc','slug','service_id','lang'];

    public function service(){
        return $this->belongsTo(Service::class);
    }
}

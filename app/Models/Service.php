<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name','desc','image_path','country_id','type'];

    public function country(){
        return $this->belongsTo(Country::class);
    }
}

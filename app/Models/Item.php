<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['lang', 'county_id','service_id', 'name', 'image_path', 'slug', 'desc'];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function details(){
        return $this->hasMany(Detail::class);
    }
}

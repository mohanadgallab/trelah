<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lang','image_path', 'slug', 'long', 'width', 'weight', 'area_1', 'area_2', 'area_3', 'area_4', 'area_5', 'area_6'];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}

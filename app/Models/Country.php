<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'content', 'image_path', 'slug'];

    public function services(){
        return $this->hasMany(Service::class);
    }
    public function items(){
        return $this->hasMany(Item::class);
    }
}

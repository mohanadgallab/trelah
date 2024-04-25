<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'content', 'image_path', 'slug', 'lang'];


    public function items(){
        return $this->hasMany(Item::class);
    }
}

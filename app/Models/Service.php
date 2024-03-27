<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name','subtitle','desc','image_path', 'slug','lang'];

    public function others(){
        return $this->hasMany(Other::class);
    }
}

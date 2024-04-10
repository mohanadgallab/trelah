<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'mobile','truck_id','qty','from_to','to_to'];

    public function truck(){
        return $this->belongsTo(Truck::class);
    }
}

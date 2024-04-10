<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'main_title',
        'sub_title',
        'paragraph',
        'l_1',
        'l_2',
        'l_3',
        'l_4',
        'l_5',
        'l_6',
        'l_7',
        'l_8',
        'l_9',
        'l_10',
        'l_11',
        'l_12',
        'l_13',
        'l_14',
        'l_15',
        'l_16',
        'l_17',
        'l_18',
        'l_19',
        'l_20',
    ];


    public function item(){
        return $this->belongsTo(Item::class);
    }
}

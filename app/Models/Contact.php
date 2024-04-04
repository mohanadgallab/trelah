<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail as FacadesMail;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts' ;
    protected $fillable = ['name','email','subject'];

    // public static function boot() {
  
    //     parent::boot();
  
    //     static::created(function ($item) {
                
    //         $adminEmail = "info@trelah.com";
    //         FacadesMail::to($adminEmail)->send(new ContactMail($item));
    //     });
    // }
}

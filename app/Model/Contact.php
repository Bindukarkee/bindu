<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = ['phone','social_media','address','email','map_url'];
    protected $table = 'contacts';
}

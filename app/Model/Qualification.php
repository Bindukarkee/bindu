<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    //
    protected $table = 'qualifactions';
    protected $fillable = ['title','level','faculty','started_year','end_year','division','status'];
}

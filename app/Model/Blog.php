<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = ['title','image','description','status'];
    protected $table = 'blogs';

    public function cat()
    {
        return $this->morphOne(Category::class,'category');
    }
}

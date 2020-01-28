<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'blogs';
    protected $fillable = ['title','image','description','status'];

    public function cat()
    {
        return $this->morphOne(Category::class,'category');
    }
}

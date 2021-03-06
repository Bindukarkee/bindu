<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'blogs';
    protected $fillable = ['title','slug','short_description','image','description','status'];

    public function category()
    {
        return $this->morphOne(Category::class,'categorizable');
    }
}

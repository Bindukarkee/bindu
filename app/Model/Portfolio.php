<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $fillable = ['title','short_description','description','image','multiple_image','status'];
    protected $table = 'portfolios';

    public function cat()
    {
        return $this->morphOne(Category::class,'category');
    }
}

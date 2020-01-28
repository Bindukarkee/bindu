<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    
    protected $table = 'portfolios';
    protected $fillable = ['title','short_description','description','image','multiple_image','status'];

    public function cat()
    {
        return $this->morphOne(Category::class,'category');
    }
}

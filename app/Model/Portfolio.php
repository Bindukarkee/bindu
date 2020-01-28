<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    
    protected $table = 'portfolios';
    protected $fillable = ['title','slug','short_description','description','image','url','status'];

    public function category()
    {
        return $this->morphOne(Category::class,'categorizable');
    }
}

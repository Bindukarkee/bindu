<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title','description','category_id','category_type','status'];
    protected $table = 'categories';

    public function category()
    {
        return $this->morphTo();
    }
    //
}

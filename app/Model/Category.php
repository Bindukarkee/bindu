<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['title','description','category_id','category_type','status'];

    public function category()
    {
        return $this->morphTo();
    }
    //
}

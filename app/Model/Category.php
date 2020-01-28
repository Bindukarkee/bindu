<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['title','slug','description','categorizable_id','categorizable_type','status'];

    public function category()
    {
        return $this->morphTo();
    }
    //
}

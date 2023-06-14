<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'category_id','name','price','description','image'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}

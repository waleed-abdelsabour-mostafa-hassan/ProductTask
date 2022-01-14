<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['name','count'];

    public function saless(){

        return $this->hasMany('App\Sales','product_id','id');
    }
}

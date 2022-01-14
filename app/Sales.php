<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Sales extends Model
{
    //
    protected $fillable=['product_id','count'];

    public function product(){
        return $this->belongsTo('App\Product','sales_id','id');
    }
}

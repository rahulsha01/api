<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\product;
class Review extends Model
{
    public function product(){
    	return $this->belongsTo(product::class);
    }
}

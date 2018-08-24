<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passport extends Model
{
    public function passport()
    {
    	return $this->hasOne(Passport::class);
    }
}

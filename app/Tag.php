<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function Shop_tags(){
      return $this->hasMany('App\Shop_tag');
    }
}

<?php

namespace sdc;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
  public function events()
  {
    return $this->belongsToMany('sdc\Event');
  }
}

<?php

namespace sdc;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name'];
    protected $guarded = ['id'];

    public function tickets()
    {
      return $this->hasMany('sdc\Ticket');
    }

    public function instructors()
    {
      return $this->belongsToMany('sdc\Instructor');
    }

    public static function activeEvent()
    {
      return self::where('active', true)->first();
    }
}

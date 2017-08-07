<?php

namespace sdc;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  protected $fillable = ['title', 'body'];
  protected $guarded = ['id'];
}

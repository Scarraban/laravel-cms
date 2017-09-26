<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
      'title',
      'content',
      'path',
      'user_id'
    ];

    public static function scopeAlphabetical($query) {
      return $query->orderBy('title', 'asc');
    }
}

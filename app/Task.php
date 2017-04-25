<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function scopeIncomplete($query)
    {
    	// return static::where('completed',false)->get();
    	return $query->where('completed', false);
    }
}

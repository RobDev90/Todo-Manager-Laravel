<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public function scopeComplete($query){
    	return $query->where('completed', 1);
    }

    public function scopeInComplete($query){
    	return $query->where('completed', 0);
    }

    public function scopeRecentlyCompletedTodos($query){
    	$one_week_ago = Carbon::now()->subWeeks(1);
    	return $query->where('completed_date', '>=', $one_week_ago);
    }
}

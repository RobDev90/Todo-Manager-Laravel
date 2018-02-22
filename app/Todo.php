<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    public function scopeComplete($query) {

    	return $query->where('completed', 1);

    }

    public function scopeInComplete($query) {

    	return $query->where('completed', 0);

    }

    public function scopeTodaysIncompleteTodos($query) {

    	$today = Carbon::today();

    	return $query->where('completed', 0)
    				 ->where('due_date', $today);

    }

    public function scopeTodosInTheNextWeek($query) {

    	$following_week = Carbon::now()->addWeeks(1);

    	return $query->where('completed', 0)
    	             ->where('due_date', '<=', $following_week);

     }

    public function scopeLastFiveCompletedTodos($query) {

    	return $query->where('completed', 1)->take(5);

    }

    public static function todayAndTomorrowFormatter($date) {
    	$date = Carbon::parse($date);

    	$msg = "";
    	if($date->isToday()) {
    		$msg = "Today";
    	}
    	else if($date->isTomorrow()){
    		$msg = "Tomorrow";
    	}
    	else {
    		$msg = $date->format('l');
    	}

    	return $msg;
    }

}

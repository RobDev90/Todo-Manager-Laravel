<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    protected $fillable = [

        'title',
        'notes',
        'due_date'

    ];

    /* Scope completed tasks */
    public function scopeComplete($query) {

    	return $query->where('completed', 1);

    }


    /* Scope incomplete tasks */
    public function scopeInComplete($query) {

    	return $query->where('completed', 0);

    }


    /* Scope incomplete tasks due today - whereDate only matches date (not datetime) */
    public function scopeTodaysIncompleteTodos($query) {

    	$today = Carbon::today();

    	return $query->where('completed', 0)
    				 ->whereDate('due_date', $today);
    }


    /* Scope incomplete tasks in the upcoming week */
    public function scopeTodosInTheNextWeek($query) {

    	$following_week = Carbon::now()->addWeeks(1);

    	return $query->where('completed', 0)
    	             ->where('due_date', '<=', $following_week);

    }


    /* Scope last (x) completed tasks */
    public function scopeLastFiveCompletedTodos($query) {

    	return $query->where('completed', 1)->take(5);

    }
    

    /* Helper method - changes day of the week to user friendly today/tomorrow where date is today/tomorrow */

    public static function todayAndTomorrowFormatter($date) {

    	$date = Carbon::parse($date);
    	$dayString = "";

    	if($date->isToday()) {
    		$dayString = "Today";
    	}
    	else if($date->isTomorrow()){
    		$dayString = "Tomorrow";
    	}
    	else {
    		$dayString = $date->format('l');
    	}

    	return $dayString;

    }

}

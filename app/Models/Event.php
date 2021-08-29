<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	public function getEventList(){
        try {
            return $query->get();
        } catch (QueryException $e) {
            return $e; 
        }
    }
}

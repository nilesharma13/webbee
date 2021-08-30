<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	public function getEventList(){
        try {
            return $this->get();
        } catch (QueryException $e) {
            return $e; 
        }
    }
}

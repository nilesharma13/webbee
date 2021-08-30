<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{
	public function getShopByIdList($id){
        try {
            return $this->where('event_id',$id)
            ->get();
        } catch (QueryException $e) {
            return $e; 
        }
    }
}

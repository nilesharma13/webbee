<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
	public function getParentNullMenu(){
        try {
            return $query->whereNull('parent_id')
            ->get();
        } catch (QueryException $e) {
            return $e; 
        }
    }

    public function getMenuByParent($id){
        try {
            return $query->where('parent_id',$id)
            ->get();
        } catch (QueryException $e) {
            return $e; 
        }
    }
}

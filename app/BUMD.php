<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BUMD extends Model
{
    protected $table ='bumd';
    //protected $fillable = ['tahun','b1r1','b1r2','b1r3','b1r4'];
    protected $guarded = [];

    public static function getBumdData($id=0){
	    if($id==0){
	      $value=DB::table('bumd')->orderBy('id', 'asc')->get(); 
	    }else{
	      $value=DB::table('bumd')->where('id', $id)->first();
	    }
	    return $value;	  
 	 }
}

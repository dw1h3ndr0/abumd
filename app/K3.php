<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class K3 extends Model
{
    protected $table ='k3';
    //protected $fillable = ['tahun','b1r1','b1r2','b1r3','b1r4'];
    protected $guarded = [];

    public static function getK3Data($id=0){
	    if($id==0){
	      $value=DB::table('k3')->orderBy('id', 'asc')->get(); 
	    }else{
	      $value=DB::table('k3')->where('id', $id)->first();
	    }
	    return $value;	  
 	 }
}

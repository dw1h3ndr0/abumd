<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table ='pegawai';
    protected $fillable = [
    	'user_id','nama','nip_lama','nip_baru','jabatan','email','no_hp','avatar'
    ];

    public function getAvatar()
    {
    	if(!$this->avatar){
    		return asset('images/default.png');
    	}

    	return asset('images/'.$this->avatar);
    }

    public function User()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}

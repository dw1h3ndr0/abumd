<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table ='kecamatan';

    public function kabupaten()
    {
    	return $this->belongsTo('App\Kabupaten');
    }

    public function desa()
    {
    	return $this->hasMany('App\Desa');
    }

}

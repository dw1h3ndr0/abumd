<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pegawai()
    {
        return $this->hasOne('App\Pegawai');
        // $x = Pegawai::where('user_id',$this->id)->get();
        // dd($x->user_id);
        // return "hendro";
    }

    public function getAvatar()
    {
        $avatar =  Post::with(array('author' => function($query)
                    {
                        $query->addSelect(array('id', 'avatar'));
                    }))->get();
        return asset('images/'.$avatar);
    }
}

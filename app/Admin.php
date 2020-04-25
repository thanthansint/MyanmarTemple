<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='admin';
    protected $primaryKey = 'id';
    // use Notifiable;

    public function event(){
        return $this->hasMany('App\Event');
    }
    public function announcement(){
        return $this->hasMany('App\Announcement');
    }

}

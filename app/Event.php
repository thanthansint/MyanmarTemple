<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table='event';
    protected $primaryKey = 'id';
    public function admin(){
        return $this->belongsTo('App\Admin');
    }
}

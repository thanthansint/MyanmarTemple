<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interested extends Model
{
    protected $table='interested';
    protected $primaryKey = 'id';
    public function user(){
        return $this->belongsTo('App\User');
    }
}

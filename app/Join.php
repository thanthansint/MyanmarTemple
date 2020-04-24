<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    protected $table='join';
    protected $primaryKey = 'id';
    public function user(){
        return $this->belongsTo('App\User');
    }
}

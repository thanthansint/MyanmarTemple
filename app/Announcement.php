<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table='announcement';
    protected $primaryKey = 'id';
    public function admin(){
        return $this->belongsTo('App\Admin');
    }
}

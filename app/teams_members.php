<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teams_members extends Model
{
    protected $primaryKey = 'id';

   
    public function team(){
        return $this->belongsTo(team::class,'id');
    }

   
}

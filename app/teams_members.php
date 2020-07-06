<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teams_members extends Model
{
    protected $primaryKey = 'id';

   
    public function teams(){
        return $this->belongsTo(Team::class,'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
    //
 protected $primaryKey = 'id';

 

    public function team_members(){
        return $this->hasMany(teams_members::class,"team_id");
    }

    public function nocreports()
    {
        return $this->hasMany('App\noc_reports');
    }

}

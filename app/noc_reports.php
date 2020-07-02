<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noc_reports extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['team_name','description','report_date','team_members_name','report_start_time','report_end_time'];
}

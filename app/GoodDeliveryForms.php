<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodDeliveryForms extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['gd_form_unique_id','gd_business_name','gd_attn','gd_address','gd_ph_no','delivery_number','delivery_date','gd_item','gd_description','gd_quantity','gd_issued_by_name','gd_received_in_date'];
}

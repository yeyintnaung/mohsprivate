<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typetwofollowup extends Model
{
    //
    protected $fillable=['hba1c','hb','cr','uacr','chol','ldl','hdl','tg','ascvd','tsh','u_a','retinopathy','neuropathy','pad','he','patient_id','date'];

    protected $table='type_two_follow_up';
    public $timestamps=false;
}

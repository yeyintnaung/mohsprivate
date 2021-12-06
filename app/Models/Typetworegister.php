<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typetworegister extends Model
{
    //
    protected $fillable=['name','age','retinopathy','hypertension','rbs','gender','year_of_dx','town','duration_of_dm','antihypertensives','phone','family_ho','other_drugs','dyslipidaemia','bmi','anti_lipids','tuberculosis','stroke','ihd_mi','nephropathy','neuropathy','dm_foot','others','hbv','hcv','rvi','smoking','alcohol','weight','height','betal_chewing','oad','insulin','traditional',
    'naive','anti_ht','anti_lipid','diet_control','physical_activity','steroid_use','admin_id'];

    protected $table='type_two_patient_register';
    public $timestamps=false;
}

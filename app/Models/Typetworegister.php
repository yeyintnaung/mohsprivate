<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typetworegister extends Model
{
    //
    protected $fillable=['name','age','gender','year_of_dx','town','duration_of_dm','phone','family_ho','hypertension','dyslipidaemia','bmi','tuberculosis','stroke','ihd_mi','nephropathy','neuropathy','dm_foot','others','surgical_history','hbv','hcv','rvi','smoking','alcohol','bmi_weight','bmi_height','betal_chewing','oad','insulin','traditional',
    'native','anti_ht','anti_lipid','others_drug_his','dental_problem','diet_control','physical_activity','steroid_use','admin_id'];

    protected $table='type_two_patient_register';
    public $timestamps=false;
}

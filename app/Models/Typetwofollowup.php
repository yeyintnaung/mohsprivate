<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typetwofollowup extends Model
{
    //
    use HasFactory;

    protected $fillable=['patient_id','retinopathy','rbs','hypertension','dyslipidaemia','ph_hypertension','ph_dyslipidaemia','bmi','tuberculosis','ph_tuberculosis','hba1c','stroke','ph_stroke','ihd_mi','ph_ihd_mi','nephropathy','ph_nephropathy','neuropathy','dm_foot','other_drugs','surgical_history','hbv','hcv','rvi','smoking','alcohol','weight','naive','height_cm','height_ft','height_in','blood_pressure','betal_chewing','oad','insulin','traditional_medicine',
        'native','antihypertensives','dental_history','antiplatelet','anti_lipids','diet_control','other_drugs_his','dental_problem','diet_control','physical_activity','steroid_use','admin_id'];

    protected $table='type_two_follow_up';
}

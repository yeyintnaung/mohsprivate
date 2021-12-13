<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTwoPatients extends Model
{
    use HasFactory;


    protected $fillable=['name','age','father_name','retinopathy','country','gender','year_of_dx','town','education','phone_no','nrc_no','referred_from','rbs','hypertension','dyslipidaemia','bmi','tuberculosis','hba1c','stroke','ihd_mi','nephropathy','neuropathy','dm_foot','other_drugs','surgical_history','hbv','hcv','rvi','smoking','alcohol','weight','naive','height','blood_pressure','betal_chewing','oad','insulin','traditional_medicine',
        'native','antihypertensives','dental_history','antiplatelet','anti_lipids','diet_control','other_drugs_his','dental_problem','diet_control','physical_activity','steroid_use','admin_id'];


    protected $table='type_two_patient_register';
    public $timestamps=false;
}

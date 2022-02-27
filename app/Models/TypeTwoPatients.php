<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTwoPatients extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'age', 'father_name', 'retinopathy', 'country', 'gender', 'year_of_dx', 'town', 'education', 'phone_no', 'nrc_no', 'referred_from', 'rbs', 'hypertension', 'dyslipidaemia', 'ph_hypertension', 'ph_dyslipidaemia', 'bmi', 'tuberculosis', 'ph_tuberculosis', 'hba1c_value','hba1c_date', 'stroke', 'ph_stroke', 'ihd_mi', 'ph_ihd_mi', 'nephropathy', 'ph_nephropathy', 'neuropathy', 'dm_foot', 'other_drugs', 'surgical_history', 'hbv', 'hcv', 'rvi', 'smoking', 'alcohol', 'weight', 'naive', 'height_cm', 'height_ft', 'height_in','lower_blood_pressure', 'upper_blood_pressure', 'betal_chewing', 'oad', 'insulin', 'traditional_medicine',
        'native', 'antihypertensives', 'dental_history', 'antiplatelet', 'anti_lipids', 'diet_control', 'other_drugs_his', 'dental_problem', 'diet_control', 'physical_activity', 'steroid_use', 'admin_id'];


    protected $table = 'type_two_patient_register';
    public $timestamps = false;

    public function getHeightAttribute()
    {
        if ($this->height_cm == 0) {
            return $this->height_ft . ' Ft'. '-' .$this->height_in.' in';
        } else {
            return $this->height_cm;
        }


    }
}

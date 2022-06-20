<?php
namespace App\Http\Controllers\traid;


use App\Models\Log;
use Illuminate\Support\Facades\Auth;

trait logtraid
{
    public function addtolog($patientid, $patientname, $action)
    {
        $add = Log::create(['patient_id' => $patientid, 'patient_name' => $patientname, 'action' => $action, 'by_user_email' => Auth::user()->email, 'by_user_name' => Auth::user()->name]);
        if ($add) {
            return true;
        }else{
            return false;
        }
    }
}

?>

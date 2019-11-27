<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Value;
use App\Sumvalue;

class SumValueController extends Controller
{
    public function sumValue()
    {
        Sumvalue::truncate();
        $val1 = Value::where([['sub_name', '=', 'DATA STRUCTURE AND ALGORITHM']])->count();
        if ($val1 > 0){
            $save1 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSJ2013', 'sub_sum_name' => 'DATA STRUCTURE AND ALGORITHM','sub_sum_value' => $val1]);
        }
    	// $save1 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSJ2013', 'sub_sum_name' => 'DATA STRUCTURE AND ALGORITHM','sub_sum_value' => $val1]);
        // $val2 = Value::where([['sub_name', '=', 'NETWORK ANALYSIS AND DESIGN SIMULATION']])->count();
    	// $save2 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR4283', 'sub_sum_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_sum_value' => $val2]);
        // $val3 = Value::where([['sub_name', '=', 'COMPUTER ORGANISATION AND ARCHITECTURE']])->count();
        // $save3 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR2033', 'sub_sum_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_sum_value' => $val3]);
        // $val4 = Value::where([['sub_name', '=', 'HUMAN COMPUTER INTERACTION']])->count();
        // $save4 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSV2113', 'sub_sum_name' => 'HUMAN COMPUTER INTERACTION','sub_sum_value' => $val4]);
        // $val5 = Value::where([['sub_name', '=', 'CRYPTOGRAPHY']])->count();
        // $save5 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR3443', 'sub_sum_name' => 'CRYPTOGRAPHY','sub_sum_value' => $val5]);
        $val6 = Value::where([['sub_name', '=', 'NETWORK SECURITY']])->count();
        if ($val6 > 0) {
    	    $save6 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR4453', 'sub_sum_name' => 'NETWORK SECURITY','sub_sum_value' => $val6]);
        }
    
    
    }
}

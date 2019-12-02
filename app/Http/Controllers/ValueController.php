<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Student;
use App\Value;

class ValueController extends Controller
{
	public function valueSub()
	{
		set_time_limit(0);
		Value::truncate();
        $finalyear = Student::where([['sub_left','<','10']])->get();
        //dd($finalyear);
        $fs1 = Subject::where([['sub_code', '=','SCSJ2013'],['sub_group','=','group1']])->get();
        $fs2 = Subject::where([['sub_code', '=','SCSR4283'],['sub_group','=','group1']])->get();
        $fs3 = Subject::where([['sub_code', '=','SCSR2033'],['sub_group','=','group1']])->get();
        $fs4 = Subject::where([['sub_code', '=','SCSV2113'],['sub_group','=','group1']])->get();
        $fs5 = Subject::where([['sub_code', '=','SCSR3443'],['sub_group','=','group1']])->get();
        $fs6 = Subject::where([['sub_code', '=','SCSR4453'],['sub_group','=','group1']])->get();
        $fs7 = Subject::where([['sub_code', '=','SCSR4493'],['sub_group','=','group1']])->get();
        $fs8 = Subject::where([['sub_code', '=','SCSV1223'],['sub_group','=','group1']])->get();
        $fs9 = Subject::where([['sub_code', '=','SCSR3242'],['sub_group','=','group1']])->get();
        $fs10 = Subject::where([['sub_code', '=','SCSR3413'],['sub_group','=','group1']])->get();
        $fs11 = Subject::where([['sub_code', '=','SCSR3253'],['sub_group','=','group1']])->get();
        $fs12 = Subject::where([['sub_code', '=','SCSJ2154'],['sub_group','=','group1']])->get();
        $fs13 = Subject::where([['sub_code', '=','UCSD2762'],['sub_group','=','group1']])->get();
        $fs14 = Subject::where([['sub_code', '=','SCSR4973'],['sub_group','=','group1']])->get();
        $fs15 = Subject::where([['sub_code', '=','SCSD2523'],['sub_group','=','group1']])->get();
        $fs16 = Subject::where([['sub_code', '=','SCSR4473'],['sub_group','=','group1']])->get();
        $fs17 = Subject::where([['sub_code', '=','SCSJ3553'],['sub_group','=','group1']])->get();
        $fs18 = Subject::where([['sub_code', '=','SCSI2143'],['sub_group','=','group1']])->get();
        $fs19 = Subject::where([['sub_code', '=','SCSR2043'],['sub_group','=','group1']])->get();
        $fs20 = Subject::where([['sub_code', '=','SCSI1113'],['sub_group','=','group1']])->get();
        $fs21 = Subject::where([['sub_code', '=','SCSP1513'],['sub_group','=','group1']])->get();
        $fs22 = Subject::where([['sub_code', '=','SECI1013'],['sub_group','=','group1']])->get();
        $fs23 = Subject::where([['sub_code', '=','SCSJ1013'],['sub_group','=','group1']])->get();
        $fs24 = Subject::where([['sub_code', '=','SCSR1013'],['sub_group','=','group1']])->get();
        $fs25 = Subject::where([['sub_code', '=','SCSJ1023'],['sub_group','=','group1']])->get();
        $fs26 = Subject::where([['sub_code', '=','SCSR1213'],['sub_group','=','group1']])->get();
        $fs27 = Subject::where([['sub_code', '=','SCSP2613'],['sub_group','=','group1']])->get();
        $fs28 = Subject::where([['sub_code', '=','SCSJ2203'],['sub_group','=','group1']])->get();
        $fs29 = Subject::where([['sub_code', '=','SCSJ3203'],['sub_group','=','group1']])->get();
        // $fs30 = Subject::where([['sub_code', '=','SCSR3032'],['sub_group','=','group1']])->get();
        // $fs31 = Subject::where([['sub_code', '=','SCSR4134'],['sub_group','=','group1']])->get();
        $fs32 = Subject::where([['sub_code', '=','SCSR2242'],['sub_group','=','group1']])->get();
        $fs33 = Subject::where([['sub_code', '=','SCSR2941'],['sub_group','=','group1']])->get();
        $fs34 = Subject::where([['sub_code', '=','SCSJ3104'],['sub_group','=','group1']])->get();
        $fs35 = Subject::where([['sub_code', '=','SCSR3323'],['sub_group','=','group1']])->get();


		//  $check = Student::where([['sub_left','<','10'],['scsr2033', '=', '1']])->count();
		//  dd($check);
		//$val = 15;

    	//$finalsubject = Subject::all();
    	//$value = Value::getAll();
     
     	foreach ($finalyear as $row) {

			

			// *********************************************************/
			// 			Comparison S1 SCSJ2013 - (S2-S20) 
            // *********************************************************/
            // if ($row->scsj2013 == '1' && $row->scsr4283 == '1'){
            //     if ($fs1 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // } /*else {
            //     $save = Value::insert(['sub_code' => 'test', 'sub_name' => 'test','sub_value' =>'1']);
            // }*/


            // if ($row->scsj2013 == '1' && $row->scsr2033 == '1'){
            //     if ($fs1 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // } /*else {
            //     $save = Value::insert(['sub_code' => 'test', 'sub_name' => 'test','sub_value' =>'1']);
            // }*/

            // if ($row->scsj2013 == '1' && $row->scsv2113 == '1'){
            //     if ($fs1 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // } /*else {
            //     $save = Value::insert(['sub_code' => 'test', 'sub_name' => 'test','sub_value' =>'1']);
            // }*/
     	
            // if ($row->scsj2013 == '1' && $row->scsr3443 == '1'){
            //     if ($fs1 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsr4453 == '1'){
            //     if ($fs1 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsr4493 == '1'){
            //     if ($fs1 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2013 == '1' && $row->scsv1223 == '1'){
            //     if ($fs1 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2013 == '1' && $row->scsr3242 == '1'){
            //     if ($fs1 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsr3413 == '1'){
            //     if ($fs1 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2013 == '1' && $row->scsr3253 == '1'){
            //     if ($fs1 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2013 == '1' && $row->scsj2154 == '1'){
            //     if ($fs1 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs1 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsr4973 == '1'){
            //     if ($fs1 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsd2523 == '1'){
            //     if ($fs1 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2013 == '1' && $row->scsr4473 == '1'){
            //     if ($fs1 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsj3553 == '1'){
            //     if ($fs1 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsi2143 == '1'){
            //     if ($fs1 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsr2043 == '1'){
            //     if ($fs1 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsi1113 == '1'){
            //     if ($fs1 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsp1513 == '1'){
            //     if ($fs1 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->seci1013 == '1'){
            //     if ($fs1 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsj1013 == '1'){
            //     if ($fs1 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsr1013 == '1'){
            //     if ($fs1 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsj1023 == '1'){
            //     if ($fs1 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsr1213 == '1'){
            //     if ($fs1 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsp2613 == '1'){
            //     if ($fs1 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsj2203 == '1'){
            //     if ($fs1 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsj3203 == '1'){
            //     if ($fs1 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsr2242 == '1'){
            //     if ($fs1 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsr2941 == '1'){
            //     if ($fs1 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsj3104 == '1'){
            //     if ($fs1 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2013 == '1' && $row->scsr3323 == '1'){
            //     if ($fs1 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2013', 'sub_name' => 'DATA STRUCTURE AND ALGORITHM','sub_value' =>'1']);
            //     }
            // }
			
			
			//*********************************************************/
			// 			Comparison S2 SCSR4283 - (S1 & S3-S20) 
			//*********************************************************/
			// if ($row->scsr4283 == '1' && $row->scsj2013 == '1'){
            //     if ($fs2 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsr2033 == '1'){
            //     if ($fs2 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsv2113 == '1'){
            //     if ($fs2 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr4283 == '1' && $row->scsr3443 == '1'){
            //     if ($fs2 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsr4453 == '1'){
            //     if ($fs2 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsr4493 == '1'){
            //     if ($fs2 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4283 == '1' && $row->scsv1223 == '1'){
            //     if ($fs2 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4283 == '1' && $row->scsr3242 == '1'){
            //     if ($fs2 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsr3413 == '1'){
            //     if ($fs2 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4283 == '1' && $row->scsr3253 == '1'){
            //     if ($fs2 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4283 == '1' && $row->scsj2154 == '1'){
            //     if ($fs2 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs2 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsr4973 == '1'){
            //     if ($fs2 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsd2523 == '1'){
            //     if ($fs2 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4283 == '1' && $row->scsr4473 == '1'){
            //     if ($fs2 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsj3553 == '1'){
            //     if ($fs2 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsi2143 == '1'){
            //     if ($fs2 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsr2043 == '1'){
            //     if ($fs2 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsi1113 == '1'){
            //     if ($fs2 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsp1513 == '1'){
            //     if ($fs2 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->seci1013 == '1'){
            //     if ($fs2 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsj1013 == '1'){
            //     if ($fs2 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsr1013 == '1'){
            //     if ($fs2 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsj1023 == '1'){
            //     if ($fs2 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsr1213 == '1'){
            //     if ($fs2 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsp2613 == '1'){
            //     if ($fs2 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsj2203 == '1'){
            //     if ($fs2 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsj3203 == '1'){
            //     if ($fs2 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsr2242 == '1'){
            //     if ($fs2 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsr2941 == '1'){
            //     if ($fs2 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsj3104 == '1'){
            //     if ($fs2 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4283 == '1' && $row->scsr3323 == '1'){
            //     if ($fs2 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4283', 'sub_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_value' =>'1']);
            //     }
            // }
			

			//*********************************************************/
			// 		Comparison S3 SCSR2033 - (S1 - S2 & S4-S20) 
			//*********************************************************/
			// if ($row->scsr2033 == '1' && $row->scsj2013 == '1'){
            //     if ($fs3 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsr4283 == '1'){
            //     if ($fs3 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsv2113 == '1'){
            //     if ($fs3 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr2033 == '1' && $row->scsr3443 == '1'){
            //     if ($fs3 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsr4453 == '1'){
            //     if ($fs3 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsr4493 == '1'){
            //     if ($fs3 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2033 == '1' && $row->scsv1223 == '1'){
            //     if ($fs3 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2033 == '1' && $row->scsr3242 == '1'){
            //     if ($fs3 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsr3413 == '1'){
            //     if ($fs3 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2033 == '1' && $row->scsr3253 == '1'){
            //     if ($fs3 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2033 == '1' && $row->scsj2154 == '1'){
            //     if ($fs3 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs3 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsr4973 == '1'){
            //     if ($fs3 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsd2523 == '1'){
            //     if ($fs3 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2033 == '1' && $row->scsr4473 == '1'){
            //     if ($fs3 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsj3553 == '1'){
            //     if ($fs3 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsi2143 == '1'){
            //     if ($fs3 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsr2043 == '1'){
            //     if ($fs3 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsi1113 == '1'){
            //     if ($fs3 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsp1513 == '1'){
            //     if ($fs3 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->seci1013 == '1'){
            //     if ($fs3 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsj1013 == '1'){
            //     if ($fs3 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsr1013 == '1'){
            //     if ($fs3 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsj1023 == '1'){
            //     if ($fs3 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsr1213 == '1'){
            //     if ($fs3 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsp2613 == '1'){
            //     if ($fs3 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsj2203 == '1'){
            //     if ($fs3 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsj3203 == '1'){
            //     if ($fs3 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsr2242 == '1'){
            //     if ($fs3 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsr2941 == '1'){
            //     if ($fs3 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsj3104 == '1'){
            //     if ($fs3 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2033 == '1' && $row->scsr3323 == '1'){
            //     if ($fs3 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2033', 'sub_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_value' =>'1']);
            //     }
            // }
			

			//*********************************************************/
			// 		Comparison S4 SCSV2113 - (S1 - S3 & S5-S20) 
			//*********************************************************/
			// if ($row->scsv2113 == '1' && $row->scsj2013 == '1'){
            //     if ($fs4 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsr4283 == '1'){
            //     if ($fs4 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsr2033 == '1'){
            //     if ($fs4 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsv2113 == '1' && $row->scsr3443 == '1'){
            //     if ($fs4 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsr4453 == '1'){
            //     if ($fs4 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsr4493 == '1'){
            //     if ($fs4 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsv2113 == '1' && $row->scsv1223 == '1'){
            //     if ($fs4 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsv2113 == '1' && $row->scsr3242 == '1'){
            //     if ($fs4 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsr3413 == '1'){
            //     if ($fs4 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsv2113 == '1' && $row->scsr3253 == '1'){
            //     if ($fs4 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsv2113 == '1' && $row->scsj2154 == '1'){
            //     if ($fs4 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs4 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsr4973 == '1'){
            //     if ($fs4 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsd2523 == '1'){
            //     if ($fs4 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsv2113 == '1' && $row->scsr4473 == '1'){
            //     if ($fs4 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsj3553 == '1'){
            //     if ($fs4 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsi2143 == '1'){
            //     if ($fs4 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsr2043 == '1'){
            //     if ($fs4 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsi1113 == '1'){
            //     if ($fs4 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsp1513 == '1'){
            //     if ($fs4 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->seci1013 == '1'){
            //     if ($fs4 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsj1013 == '1'){
            //     if ($fs4 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsr1013 == '1'){
            //     if ($fs4 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsj1023 == '1'){
            //     if ($fs4 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsr1213 == '1'){
            //     if ($fs4 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsp2613 == '1'){
            //     if ($fs4 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsj2203 == '1'){
            //     if ($fs4 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsj3203 == '1'){
            //     if ($fs4 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsr2242 == '1'){
            //     if ($fs4 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsr2941 == '1'){
            //     if ($fs4 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsj3104 == '1'){
            //     if ($fs4 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv2113 == '1' && $row->scsr3323 == '1'){
            //     if ($fs4 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV2113', 'sub_name' => 'HUMAN COMPUTER INTERACTION','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S5 SCSR3443 - (S1 - S4 & S6-S20) 
			// //*********************************************************/
			// if ($row->scsr3443 == '1' && $row->scsj2013 == '1'){
            //     if ($fs5 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsr4283 == '1'){
            //     if ($fs5 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsr2033 == '1'){
            //     if ($fs5 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr3443 == '1' && $row->scsv2113 == '1'){
            //     if ($fs5 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsr4453 == '1'){
            //     if ($fs5 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsr4493 == '1'){
            //     if ($fs5 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3443 == '1' && $row->scsv1223 == '1'){
            //     if ($fs5 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3443 == '1' && $row->scsr3242 == '1'){
            //     if ($fs5 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsr3413 == '1'){
            //     if ($fs5 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3443 == '1' && $row->scsr3253 == '1'){
            //     if ($fs5 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3443 == '1' && $row->scsj2154 == '1'){
            //     if ($fs5 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs5 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsr4973 == '1'){
            //     if ($fs5 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsd2523 == '1'){
            //     if ($fs5 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3443 == '1' && $row->scsr4473 == '1'){
            //     if ($fs5 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsj3553 == '1'){
            //     if ($fs5 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsi2143 == '1'){
            //     if ($fs5 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsr2043 == '1'){
            //     if ($fs5 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsi1113 == '1'){
            //     if ($fs5 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsp1513 == '1'){
            //     if ($fs5 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->seci1013 == '1'){
            //     if ($fs5 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsj1013 == '1'){
            //     if ($fs5 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsr1013 == '1'){
            //     if ($fs5 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsj1023 == '1'){
            //     if ($fs5 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsr1213 == '1'){
            //     if ($fs5 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsp2613 == '1'){
            //     if ($fs5 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsj2203 == '1'){
            //     if ($fs5 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsj3203 == '1'){
            //     if ($fs5 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsr2242 == '1'){
            //     if ($fs5 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsr2941 == '1'){
            //     if ($fs5 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsj3104 == '1'){
            //     if ($fs5 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3443 == '1' && $row->scsr3323 == '1'){
            //     if ($fs5 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3443', 'sub_name' => 'CRYPTOGRAPHY','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S6 SCSR4453 - (S1 - S5 & S7-S20) 
			// //*********************************************************/
			// if ($row->scsr4453 == '1' && $row->scsj2013 == '1'){
            //     if ($fs6 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsr4283 == '1'){
            //     if ($fs6 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsr2033 == '1'){
            //     if ($fs6 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr4453 == '1' && $row->scsv2113 == '1'){
            //     if ($fs6 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsr3443 == '1'){
            //     if ($fs6 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsr4493 == '1'){
            //     if ($fs6 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4453 == '1' && $row->scsv1223 == '1'){
            //     if ($fs6 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4453 == '1' && $row->scsr3242 == '1'){
            //     if ($fs6 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsr3413 == '1'){
            //     if ($fs6 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4453 == '1' && $row->scsr3253 == '1'){
            //     if ($fs6 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4453 == '1' && $row->scsj2154 == '1'){
            //     if ($fs6 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs6 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsr4973 == '1'){
            //     if ($fs6 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsd2523 == '1'){
            //     if ($fs6 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4453 == '1' && $row->scsr4473 == '1'){
            //     if ($fs6 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsj3553 == '1'){
            //     if ($fs6 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsi2143 == '1'){
            //     if ($fs6 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsr2043 == '1'){
            //     if ($fs6 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsi1113 == '1'){
            //     if ($fs6 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsp1513 == '1'){
            //     if ($fs6 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->seci1013 == '1'){
            //     if ($fs6 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsj1013 == '1'){
            //     if ($fs6 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsr1013 == '1'){
            //     if ($fs6 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsj1023 == '1'){
            //     if ($fs6 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsr1213 == '1'){
            //     if ($fs6 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsp2613 == '1'){
            //     if ($fs6 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsj2203 == '1'){
            //     if ($fs6 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsj3203 == '1'){
            //     if ($fs6 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsr2242 == '1'){
            //     if ($fs6 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsr2941 == '1'){
            //     if ($fs6 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsj3104 == '1'){
            //     if ($fs6 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4453 == '1' && $row->scsr3323 == '1'){
            //     if ($fs6 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S7 SCSR4493 - (S1 - S6 & S8-S20) 
			// //*********************************************************/
			// if ($row->scsr4493 == '1' && $row->scsj2013 == '1'){
            //     if ($fs7 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsr4283 == '1'){
            //     if ($fs7 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsr2033 == '1'){
            //     if ($fs7 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr4493 == '1' && $row->scsv2113 == '1'){
            //     if ($fs7 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsr3443 == '1'){
            //     if ($fs7 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsr4453 == '1'){
            //     if ($fs7 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4493 == '1' && $row->scsv1223 == '1'){
            //     if ($fs7 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4493 == '1' && $row->scsr3242 == '1'){
            //     if ($fs7 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsr3413 == '1'){
            //     if ($fs7 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4493 == '1' && $row->scsr3253 == '1'){
            //     if ($fs7 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4493 == '1' && $row->scsj2154 == '1'){
            //     if ($fs7 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs7 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsr4973 == '1'){
            //     if ($fs7 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsd2523 == '1'){
            //     if ($fs7 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4493 == '1' && $row->scsr4473 == '1'){
            //     if ($fs7 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsj3553 == '1'){
            //     if ($fs7 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsi2143 == '1'){
            //     if ($fs7 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsr2043 == '1'){
            //     if ($fs7 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsi1113 == '1'){
            //     if ($fs7 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsp1513 == '1'){
            //     if ($fs7 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->seci1013 == '1'){
            //     if ($fs7 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsj1013 == '1'){
            //     if ($fs7 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsr1013 == '1'){
            //     if ($fs7 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsj1023 == '1'){
            //     if ($fs7 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsr1213 == '1'){
            //     if ($fs7 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsp2613 == '1'){
            //     if ($fs7 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsj2203 == '1'){
            //     if ($fs7 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsj3203 == '1'){
            //     if ($fs7 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsr2242 == '1'){
            //     if ($fs7 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsr2941 == '1'){
            //     if ($fs7 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsj3104 == '1'){
            //     if ($fs7 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4493 == '1' && $row->scsr3323 == '1'){
            //     if ($fs7 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S8 SCSV1223 - (S1 - S7 & S9-S20) 
			// //*********************************************************/
			// if ($row->scsv1223 == '1' && $row->scsj2013 == '1'){
            //     if ($fs8 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsr4283 == '1'){
            //     if ($fs8 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsr2033 == '1'){
            //     if ($fs8 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsv1223 == '1' && $row->scsv2113 == '1'){
            //     if ($fs8 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsr3443 == '1'){
            //     if ($fs8 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsr4453 == '1'){
            //     if ($fs8 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsv1223 == '1' && $row->scsr4493 == '1'){
            //     if ($fs8 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsv1223 == '1' && $row->scsr3242 == '1'){
            //     if ($fs8 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsr3413 == '1'){
            //     if ($fs8 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsv1223 == '1' && $row->scsr3253 == '1'){
            //     if ($fs8 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsv1223 == '1' && $row->scsj2154 == '1'){
            //     if ($fs8 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs8 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsr4973 == '1'){
            //     if ($fs8 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsd2523 == '1'){
            //     if ($fs8 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsv1223 == '1' && $row->scsr4473 == '1'){
            //     if ($fs8 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsj3553 == '1'){
            //     if ($fs8 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsi2143 == '1'){
            //     if ($fs8 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsr2043 == '1'){
            //     if ($fs8 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsi1113 == '1'){
            //     if ($fs8 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsp1513 == '1'){
            //     if ($fs8 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->seci1013 == '1'){
            //     if ($fs8 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsj1013 == '1'){
            //     if ($fs8 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsr1013 == '1'){
            //     if ($fs8 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsj1023 == '1'){
            //     if ($fs8 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsr1213 == '1'){
            //     if ($fs8 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsp2613 == '1'){
            //     if ($fs8 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsj2203 == '1'){
            //     if ($fs8 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsj3203 == '1'){
            //     if ($fs8 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsr2242 == '1'){
            //     if ($fs8 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsr2941 == '1'){
            //     if ($fs8 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsj3104 == '1'){
            //     if ($fs8 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsv1223 == '1' && $row->scsr3323 == '1'){
            //     if ($fs8 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S9 SCSR3242 - (S1 - S8 & S10-S20) 
			// //*********************************************************/
			// if ($row->scsr3242 == '1' && $row->scsj2013 == '1'){
            //     if ($fs9 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsr4283 == '1'){
            //     if ($fs9 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsr2033 == '1'){
            //     if ($fs9 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr3242 == '1' && $row->scsv2113 == '1'){
            //     if ($fs9 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsr3443 == '1'){
            //     if ($fs9 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsr4453 == '1'){
            //     if ($fs9 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3242 == '1' && $row->scsr4493 == '1'){
            //     if ($fs9 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3242 == '1' && $row->scsv1223 == '1'){
            //     if ($fs9 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsr3413 == '1'){
            //     if ($fs9 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3242 == '1' && $row->scsr3253 == '1'){
            //     if ($fs9 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3242 == '1' && $row->scsj2154 == '1'){
            //     if ($fs9 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs9 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsr4973 == '1'){
            //     if ($fs9 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsd2523 == '1'){
            //     if ($fs9 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3242 == '1' && $row->scsr4473 == '1'){
            //     if ($fs9 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsj3553 == '1'){
            //     if ($fs9 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsi2143 == '1'){
            //     if ($fs9 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsr2043 == '1'){
            //     if ($fs9 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsi1113 == '1'){
            //     if ($fs9 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsp1513 == '1'){
            //     if ($fs9 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->seci1013 == '1'){
            //     if ($fs9 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsj1013 == '1'){
            //     if ($fs9 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsr1013 == '1'){
            //     if ($fs9 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsj1023 == '1'){
            //     if ($fs9 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsr1213 == '1'){
            //     if ($fs9 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsp2613 == '1'){
            //     if ($fs9 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsj2203 == '1'){
            //     if ($fs9 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsj3203 == '1'){
            //     if ($fs9 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsr2242 == '1'){
            //     if ($fs9 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsr2941 == '1'){
            //     if ($fs9 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsj3104 == '1'){
            //     if ($fs9 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3242 == '1' && $row->scsr3323 == '1'){
            //     if ($fs9 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S10 SCSR3413 - (S1 - S9 & S11-S20) 
			// //*********************************************************/
			// if ($row->scsr3413 == '1' && $row->scsj2013 == '1'){
            //     if ($fs10 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsr4283 == '1'){
            //     if ($fs10 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsr2033 == '1'){
            //     if ($fs10 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr3413 == '1' && $row->scsv2113 == '1'){
            //     if ($fs10 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsr3443 == '1'){
            //     if ($fs10 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsr4453 == '1'){
            //     if ($fs10 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3413 == '1' && $row->scsr4493 == '1'){
            //     if ($fs10 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3413 == '1' && $row->scsv1223 == '1'){
            //     if ($fs10 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsr3242 == '1'){
            //     if ($fs10 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3413 == '1' && $row->scsr3253 == '1'){
            //     if ($fs10 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3413 == '1' && $row->scsj2154 == '1'){
            //     if ($fs10 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs10 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsr4973 == '1'){
            //     if ($fs10 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsd2523 == '1'){
            //     if ($fs10 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3413 == '1' && $row->scsr4473 == '1'){
            //     if ($fs10 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsj3553 == '1'){
            //     if ($fs10 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsi2143 == '1'){
            //     if ($fs10 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsr2043 == '1'){
            //     if ($fs10 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsi1113 == '1'){
            //     if ($fs10 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsp1513 == '1'){
            //     if ($fs10 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->seci1013 == '1'){
            //     if ($fs10 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsj1013 == '1'){
            //     if ($fs10 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsr1013 == '1'){
            //     if ($fs10 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsj1023 == '1'){
            //     if ($fs10 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsr1213 == '1'){
            //     if ($fs10 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsp2613 == '1'){
            //     if ($fs10 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsj2203 == '1'){
            //     if ($fs10 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsj3203 == '1'){
            //     if ($fs10 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsr2242 == '1'){
            //     if ($fs10 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsr2941 == '1'){
            //     if ($fs10 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsj3104 == '1'){
            //     if ($fs10 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3413 == '1' && $row->scsr3323 == '1'){
            //     if ($fs10 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S11 SCSR3253 - (S1 - S10 & S12-S20) 
			// //*********************************************************/
			// if ($row->scsr3253 == '1' && $row->scsj2013 == '1'){
            //     if ($fs11 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsr4283 == '1'){
            //     if ($fs11 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsr2033 == '1'){
            //     if ($fs11 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr3253 == '1' && $row->scsv2113 == '1'){
            //     if ($fs11 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsr3443 == '1'){
            //     if ($fs11 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsr4453 == '1'){
            //     if ($fs11 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3253 == '1' && $row->scsr4493 == '1'){
            //     if ($fs11 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3253 == '1' && $row->scsv1223 == '1'){
            //     if ($fs11 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsr3242 == '1'){
            //     if ($fs11 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3253 == '1' && $row->scsr3413 == '1'){
            //     if ($fs11 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3253 == '1' && $row->scsj2154 == '1'){
            //     if ($fs11 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs11 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsr4973 == '1'){
            //     if ($fs11 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsd2523 == '1'){
            //     if ($fs11 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr3253 == '1' && $row->scsr4473 == '1'){
            //     if ($fs11 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsj3553 == '1'){
            //     if ($fs11 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsi2143 == '1'){
            //     if ($fs11 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsr2043 == '1'){
            //     if ($fs11 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsi1113 == '1'){
            //     if ($fs11 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsp1513 == '1'){
            //     if ($fs11 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->seci1013 == '1'){
            //     if ($fs11 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsj1013 == '1'){
            //     if ($fs11 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsr1013 == '1'){
            //     if ($fs11 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsj1023 == '1'){
            //     if ($fs11 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsr1213 == '1'){
            //     if ($fs11 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsp2613 == '1'){
            //     if ($fs11 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsj2203 == '1'){
            //     if ($fs11 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsj3203 == '1'){
            //     if ($fs11 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsr2242 == '1'){
            //     if ($fs11 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsr2941 == '1'){
            //     if ($fs11 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsj3104 == '1'){
            //     if ($fs11 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr3253 == '1' && $row->scsr3323 == '1'){
            //     if ($fs11 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S12 SCSJ2154 - (S1 - S11 & S13-S20) 
			// //*********************************************************/
			// if ($row->scsj2154 == '1' && $row->scsj2013 == '1'){
            //     if ($fs12 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsr4283 == '1'){
            //     if ($fs12 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsr2033 == '1'){
            //     if ($fs12 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsj2154 == '1' && $row->scsv2113 == '1'){
            //     if ($fs12 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsr3443 == '1'){
            //     if ($fs12 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsr4453 == '1'){
            //     if ($fs12 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2154 == '1' && $row->scsr4493 == '1'){
            //     if ($fs12 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2154 == '1' && $row->scsv1223 == '1'){
            //     if ($fs12 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsr3242 == '1'){
            //     if ($fs12 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2154 == '1' && $row->scsr3413 == '1'){
            //     if ($fs12 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2154 == '1' && $row->scsr3253 == '1'){
            //     if ($fs12 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs12 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsr4973 == '1'){
            //     if ($fs12 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsd2523 == '1'){
            //     if ($fs12 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2154 == '1' && $row->scsr4473 == '1'){
            //     if ($fs12 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsj3553 == '1'){
            //     if ($fs12 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsi2143 == '1'){
            //     if ($fs12 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsr2043 == '1'){
            //     if ($fs12 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsi1113 == '1'){
            //     if ($fs12 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsp1513 == '1'){
            //     if ($fs12 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->seci1013 == '1'){
            //     if ($fs12 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsj1013 == '1'){
            //     if ($fs12 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsr1013 == '1'){
            //     if ($fs12 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsj1023 == '1'){
            //     if ($fs12 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsr1213 == '1'){
            //     if ($fs12 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsp2613 == '1'){
            //     if ($fs12 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsj2203 == '1'){
            //     if ($fs12 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsj3203 == '1'){
            //     if ($fs12 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsr2242 == '1'){
            //     if ($fs12 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsr2941 == '1'){
            //     if ($fs12 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsj3104 == '1'){
            //     if ($fs12 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2154 == '1' && $row->scsr3323 == '1'){
            //     if ($fs12 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S13 UCSD2762 - (S1 - S12 & S14-S20) 
			// //*********************************************************/
			// if ($row->ucsd2762 == '1' && $row->scsj2013 == '1'){
            //     if ($fs13 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsr4283 == '1'){
            //     if ($fs13 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsr2033 == '1'){
            //     if ($fs13 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->ucsd2762 == '1' && $row->scsv2113 == '1'){
            //     if ($fs13 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsr3443 == '1'){
            //     if ($fs13 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsr4453 == '1'){
            //     if ($fs13 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->ucsd2762 == '1' && $row->scsr4493 == '1'){
            //     if ($fs13 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->ucsd2762 == '1' && $row->scsv1223 == '1'){
            //     if ($fs13 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsr3242 == '1'){
            //     if ($fs13 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->ucsd2762 == '1' && $row->scsr3413 == '1'){
            //     if ($fs13 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->ucsd2762 == '1' && $row->scsr3253 == '1'){
            //     if ($fs13 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsj2154 == '1'){
            //     if ($fs13 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsr4973 == '1'){
            //     if ($fs13 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsd2523 == '1'){
            //     if ($fs13 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->ucsd2762 == '1' && $row->scsr4473 == '1'){
            //     if ($fs13 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsj3553 == '1'){
            //     if ($fs13 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsi2143 == '1'){
            //     if ($fs13 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsr2043 == '1'){
            //     if ($fs13 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsi1113 == '1'){
            //     if ($fs13 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsp1513 == '1'){
            //     if ($fs13 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->seci1013 == '1'){
            //     if ($fs13 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsj1013 == '1'){
            //     if ($fs13 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsr1013 == '1'){
            //     if ($fs13 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsj1023 == '1'){
            //     if ($fs13 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsr1213 == '1'){
            //     if ($fs13 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsp2613 == '1'){
            //     if ($fs13 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsj2203 == '1'){
            //     if ($fs13 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsj3203 == '1'){
            //     if ($fs13 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsr2242 == '1'){
            //     if ($fs13 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsr2941 == '1'){
            //     if ($fs13 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsj3104 == '1'){
            //     if ($fs13 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

            // if ($row->ucsd2762 == '1' && $row->scsr3323 == '1'){
            //     if ($fs13 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S14 SCSR4973 - (S1 - S13 & S15-S20) 
			// //*********************************************************/
			// if ($row->scsr4973 == '1' && $row->scsj2013 == '1'){
            //     if ($fs14 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsr4283 == '1'){
            //     if ($fs14 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsr2033 == '1'){
            //     if ($fs14 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr4973 == '1' && $row->scsv2113 == '1'){
            //     if ($fs14 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsr3443 == '1'){
            //     if ($fs14 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsr4453 == '1'){
            //     if ($fs14 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4973 == '1' && $row->scsr4493 == '1'){
            //     if ($fs14 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4973 == '1' && $row->scsv1223 == '1'){
            //     if ($fs14 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsr3242 == '1'){
            //     if ($fs14 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4973 == '1' && $row->scsr3413 == '1'){
            //     if ($fs14 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4973 == '1' && $row->scsr3253 == '1'){
            //     if ($fs14 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsj2154 == '1'){
            //     if ($fs14 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs14 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsd2523 == '1'){
            //     if ($fs14 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4973 == '1' && $row->scsr4473 == '1'){
            //     if ($fs14 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsj3553 == '1'){
            //     if ($fs14 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsi2143 == '1'){
            //     if ($fs14 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsr2043 == '1'){
            //     if ($fs14 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsi1113 == '1'){
            //     if ($fs14 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsp1513 == '1'){
            //     if ($fs14 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->seci1013 == '1'){
            //     if ($fs14 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsj1013 == '1'){
            //     if ($fs14 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsr1013 == '1'){
            //     if ($fs14 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsj1023 == '1'){
            //     if ($fs14 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsr1213 == '1'){
            //     if ($fs14 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsp2613 == '1'){
            //     if ($fs14 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsj2203 == '1'){
            //     if ($fs14 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsj3203 == '1'){
            //     if ($fs14 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsr2242 == '1'){
            //     if ($fs14 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsr2941 == '1'){
            //     if ($fs14 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsj3104 == '1'){
            //     if ($fs14 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4973 == '1' && $row->scsr3323 == '1'){
            //     if ($fs14 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S15 SCSD2523 - (S1 - S14 & S16-S20) 
			// //*********************************************************/
			// if ($row->scsd2523 == '1' && $row->scsj2013 == '1'){
            //     if ($fs15 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsr4283 == '1'){
            //     if ($fs15 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsr2033 == '1'){
            //     if ($fs15 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsd2523 == '1' && $row->scsv2113 == '1'){
            //     if ($fs15 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsr3443 == '1'){
            //     if ($fs15 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsr4453 == '1'){
            //     if ($fs15 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsd2523 == '1' && $row->scsr4493 == '1'){
            //     if ($fs15 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsd2523 == '1' && $row->scsv1223 == '1'){
            //     if ($fs15 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsr3242 == '1'){
            //     if ($fs15 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsd2523 == '1' && $row->scsr3413 == '1'){
            //     if ($fs15 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsd2523 == '1' && $row->scsr3253 == '1'){
            //     if ($fs15 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsj2154 == '1'){
            //     if ($fs15 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs15 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsr4973 == '1'){
            //     if ($fs15 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsd2523 == '1' && $row->scsr4473 == '1'){
            //     if ($fs15 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsj3553 == '1'){
            //     if ($fs15 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsi2143 == '1'){
            //     if ($fs15 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsr2043 == '1'){
            //     if ($fs15 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsi1113 == '1'){
            //     if ($fs15 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsp1513 == '1'){
            //     if ($fs15 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->seci1013 == '1'){
            //     if ($fs15 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsj1013 == '1'){
            //     if ($fs15 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsr1013 == '1'){
            //     if ($fs15 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsj1023 == '1'){
            //     if ($fs15 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsr1213 == '1'){
            //     if ($fs15 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsp2613 == '1'){
            //     if ($fs15 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsj2203 == '1'){
            //     if ($fs15 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsj3203 == '1'){
            //     if ($fs15 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsr2242 == '1'){
            //     if ($fs15 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsr2941 == '1'){
            //     if ($fs15 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsj3104 == '1'){
            //     if ($fs15 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsd2523 == '1' && $row->scsr3323 == '1'){
            //     if ($fs15 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S16 SCSR4473 - (S1 - S15 & S17-S20) 
			// //*********************************************************/
			// if ($row->scsr4473 == '1' && $row->scsj2013 == '1'){
            //     if ($fs16 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsr4283 == '1'){
            //     if ($fs16 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsr2033 == '1'){
            //     if ($fs16 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr4473 == '1' && $row->scsv2113 == '1'){
            //     if ($fs16 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsr3443 == '1'){
            //     if ($fs16 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsr4453 == '1'){
            //     if ($fs16 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4473 == '1' && $row->scsr4493 == '1'){
            //     if ($fs16 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4473 == '1' && $row->scsv1223 == '1'){
            //     if ($fs16 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsr3242 == '1'){
            //     if ($fs16 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4473 == '1' && $row->scsr3413 == '1'){
            //     if ($fs16 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4473 == '1' && $row->scsr3253 == '1'){
            //     if ($fs16 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsj2154 == '1'){
            //     if ($fs16 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs16 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsr4973 == '1'){
            //     if ($fs16 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr4473 == '1' && $row->scsd2523 == '1'){
            //     if ($fs16 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsj3553 == '1'){
            //     if ($fs16 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsi2143 == '1'){
            //     if ($fs16 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsr2043 == '1'){
            //     if ($fs16 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsi1113 == '1'){
            //     if ($fs16 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsp1513 == '1'){
            //     if ($fs16 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->seci1013 == '1'){
            //     if ($fs16 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsj1013 == '1'){
            //     if ($fs16 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsr1013 == '1'){
            //     if ($fs16 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsj1023 == '1'){
            //     if ($fs16 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsr1213 == '1'){
            //     if ($fs16 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsp2613 == '1'){
            //     if ($fs16 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsj2203 == '1'){
            //     if ($fs16 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsj3203 == '1'){
            //     if ($fs16 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsr2242 == '1'){
            //     if ($fs16 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsr2941 == '1'){
            //     if ($fs16 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsj3104 == '1'){
            //     if ($fs16 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr4473 == '1' && $row->scsr3323 == '1'){
            //     if ($fs16 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S17 SCSJ3553 - (S1 - S16 & S18-S20) 
			// //*********************************************************/
			// if ($row->scsj3553 == '1' && $row->scsj2013 == '1'){
            //     if ($fs17 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsr4283 == '1'){
            //     if ($fs17 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsr2033 == '1'){
            //     if ($fs17 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsj3553 == '1' && $row->scsv2113 == '1'){
            //     if ($fs17 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsr3443 == '1'){
            //     if ($fs17 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsr4453 == '1'){
            //     if ($fs17 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3553 == '1' && $row->scsr4493 == '1'){
            //     if ($fs17 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3553 == '1' && $row->scsv1223 == '1'){
            //     if ($fs17 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsr3242 == '1'){
            //     if ($fs17 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3553 == '1' && $row->scsr3413 == '1'){
            //     if ($fs17 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3553 == '1' && $row->scsr3253 == '1'){
            //     if ($fs17 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsj2154 == '1'){
            //     if ($fs17 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs17 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsr4973 == '1'){
            //     if ($fs17 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3553 == '1' && $row->scsd2523 == '1'){
            //     if ($fs17 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsr4473 == '1'){
            //     if ($fs17 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsi2143 == '1'){
            //     if ($fs17 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsr2043 == '1'){
            //     if ($fs17 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsi1113 == '1'){
            //     if ($fs17 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsp1513 == '1'){
            //     if ($fs17 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->seci1013 == '1'){
            //     if ($fs17 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsj1013 == '1'){
            //     if ($fs17 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsr1013 == '1'){
            //     if ($fs17 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsj1023 == '1'){
            //     if ($fs17 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsr1213 == '1'){
            //     if ($fs17 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsp2613 == '1'){
            //     if ($fs17 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsj2203 == '1'){
            //     if ($fs17 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsj3203 == '1'){
            //     if ($fs17 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsr2242 == '1'){
            //     if ($fs17 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsr2941 == '1'){
            //     if ($fs17 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsj3104 == '1'){
            //     if ($fs17 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3553 == '1' && $row->scsr3323 == '1'){
            //     if ($fs17 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S18 SCSI2143 - (S1 - S17 & S19-S20) 
			// //*********************************************************/
			// if ($row->scsi2143 == '1' && $row->scsj2013 == '1'){
            //     if ($fs18 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsr4283 == '1'){
            //     if ($fs18 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsr2033 == '1'){
            //     if ($fs18 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsi2143 == '1' && $row->scsv2113 == '1'){
            //     if ($fs18 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsr3443 == '1'){
            //     if ($fs18 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsr4453 == '1'){
            //     if ($fs18 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsi2143 == '1' && $row->scsr4493 == '1'){
            //     if ($fs18 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsi2143 == '1' && $row->scsv1223 == '1'){
            //     if ($fs18 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsr3242 == '1'){
            //     if ($fs18 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsi2143 == '1' && $row->scsr3413 == '1'){
            //     if ($fs18 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsi2143 == '1' && $row->scsr3253 == '1'){
            //     if ($fs18 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsj2154 == '1'){
            //     if ($fs18 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs18 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsr4973 == '1'){
            //     if ($fs18 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsi2143 == '1' && $row->scsd2523 == '1'){
            //     if ($fs18 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsr4473 == '1'){
            //     if ($fs18 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsj3553 == '1'){
            //     if ($fs18 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsr2043 == '1'){
            //     if ($fs18 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsi1113 == '1'){
            //     if ($fs18 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsp1513 == '1'){
            //     if ($fs18 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->seci1013 == '1'){
            //     if ($fs18 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsj1013 == '1'){
            //     if ($fs18 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsr1013 == '1'){
            //     if ($fs18 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsj1023 == '1'){
            //     if ($fs18 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsr1213 == '1'){
            //     if ($fs18 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsp2613 == '1'){
            //     if ($fs18 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsj2203 == '1'){
            //     if ($fs18 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsj3203 == '1'){
            //     if ($fs18 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsr2242 == '1'){
            //     if ($fs18 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsr2941 == '1'){
            //     if ($fs18 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsj3104 == '1'){
            //     if ($fs18 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi2143 == '1' && $row->scsr3323 == '1'){
            //     if ($fs18 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S19 SCSR2043 - (S1 - S18 & S20) 
			// //*********************************************************/
			// if ($row->scsr2043 == '1' && $row->scsj2013 == '1'){
            //     if ($fs19 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsr4283 == '1'){
            //     if ($fs19 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsr2033 == '1'){
            //     if ($fs19 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr2043 == '1' && $row->scsv2113 == '1'){
            //     if ($fs19 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsr3443 == '1'){
            //     if ($fs19 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsr4453 == '1'){
            //     if ($fs19 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2043 == '1' && $row->scsr4493 == '1'){
            //     if ($fs19 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2043 == '1' && $row->scsv1223 == '1'){
            //     if ($fs19 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsr3242 == '1'){
            //     if ($fs19 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2043 == '1' && $row->scsr3413 == '1'){
            //     if ($fs19 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2043 == '1' && $row->scsr3253 == '1'){
            //     if ($fs19 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsj2154 == '1'){
            //     if ($fs19 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs19 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsr4973 == '1'){
            //     if ($fs19 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2043 == '1' && $row->scsd2523 == '1'){
            //     if ($fs19 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsr4473 == '1'){
            //     if ($fs19 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsj3553 == '1'){
            //     if ($fs19 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsi2143 == '1'){
            //     if ($fs19 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsi1113 == '1'){
            //     if ($fs19 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsp1513 == '1'){
            //     if ($fs19 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->seci1013 == '1'){
            //     if ($fs19 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsj1013 == '1'){
            //     if ($fs19 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsr1013 == '1'){
            //     if ($fs19 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsj1023 == '1'){
            //     if ($fs19 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsr1213 == '1'){
            //     if ($fs19 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsp2613 == '1'){
            //     if ($fs19 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsj2203 == '1'){
            //     if ($fs19 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsj3203 == '1'){
            //     if ($fs19 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsr2242 == '1'){
            //     if ($fs19 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsr2941 == '1'){
            //     if ($fs19 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsj3104 == '1'){
            //     if ($fs19 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2043 == '1' && $row->scsr3323 == '1'){
            //     if ($fs19 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
            //     }
            // }

			// //*********************************************************/
			// // 		Comparison S20 SCSI1113 - (S1 - S19) 
			// //*********************************************************/
			// if ($row->scsi1113 == '1' && $row->scsj2013 == '1'){
            //     if ($fs20 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsr4283 == '1'){
            //     if ($fs20 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsr2033 == '1'){
            //     if ($fs20 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsi1113 == '1' && $row->scsv2113 == '1'){
            //     if ($fs20 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsr3443 == '1'){
            //     if ($fs20 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsr4453 == '1'){
            //     if ($fs20 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsi1113 == '1' && $row->scsr4493 == '1'){
            //     if ($fs20 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsi1113 == '1' && $row->scsv1223 == '1'){
            //     if ($fs20 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsr3242 == '1'){
            //     if ($fs20 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsi1113 == '1' && $row->scsr3413 == '1'){
            //     if ($fs20 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsi1113 == '1' && $row->scsr3253 == '1'){
            //     if ($fs20 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsj2154 == '1'){
            //     if ($fs20 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs20 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsr4973 == '1'){
            //     if ($fs20 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsi1113 == '1' && $row->scsd2523 == '1'){
            //     if ($fs20 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsr4473 == '1'){
            //     if ($fs20 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsj3553 == '1'){
            //     if ($fs20 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsi2143 == '1'){
            //     if ($fs20 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsr2043 == '1'){
            //     if ($fs20 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsp1513 == '1'){
            //     if ($fs20 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->seci1013 == '1'){
            //     if ($fs20 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsj1013 == '1'){
            //     if ($fs20 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsr1013 == '1'){
            //     if ($fs20 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsj1023 == '1'){
            //     if ($fs20 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsr1213 == '1'){
            //     if ($fs20 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsp2613 == '1'){
            //     if ($fs20 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsj2203 == '1'){
            //     if ($fs20 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsj3203 == '1'){
            //     if ($fs20 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsr2242 == '1'){
            //     if ($fs20 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsr2941 == '1'){
            //     if ($fs20 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsj3104 == '1'){
            //     if ($fs20 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsi1113 == '1' && $row->scsr3323 == '1'){
            //     if ($fs20 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
            //     }
            // }

            // //*********************************************************/
			// // 		Comparison S21 SCSP1513 - (S1 - S20 & S22 - S35) 
			// //*********************************************************/
			// if ($row->scsp1513 == '1' && $row->scsj2013 == '1'){
            //     if ($fs21 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsr4283 == '1'){
            //     if ($fs21 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsr2033 == '1'){
            //     if ($fs21 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsp1513 == '1' && $row->scsv2113 == '1'){
            //     if ($fs21 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsr3443 == '1'){
            //     if ($fs21 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsr4453 == '1'){
            //     if ($fs21 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsp1513 == '1' && $row->scsr4493 == '1'){
            //     if ($fs21 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsp1513 == '1' && $row->scsv1223 == '1'){
            //     if ($fs21 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsr3242 == '1'){
            //     if ($fs21 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsp1513 == '1' && $row->scsr3413 == '1'){
            //     if ($fs21 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsp1513 == '1' && $row->scsr3253 == '1'){
            //     if ($fs21 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsj2154 == '1'){
            //     if ($fs21 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs21 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsr4973 == '1'){
            //     if ($fs21 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsp1513 == '1' && $row->scsd2523 == '1'){
            //     if ($fs21 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsr4473 == '1'){
            //     if ($fs21 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsj3553 == '1'){
            //     if ($fs21 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsi2143 == '1'){
            //     if ($fs21 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsr2043 == '1'){
            //     if ($fs21 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsi1113 == '1'){
            //     if ($fs21 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->seci1013 == '1'){
            //     if ($fs21 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsj1013 == '1'){
            //     if ($fs21 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsr1013 == '1'){
            //     if ($fs21 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsj1023 == '1'){
            //     if ($fs21 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsr1213 == '1'){
            //     if ($fs21 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsp2613 == '1'){
            //     if ($fs21 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsj2203 == '1'){
            //     if ($fs21 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsj3203 == '1'){
            //     if ($fs21 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsr2242 == '1'){
            //     if ($fs21 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsr2941 == '1'){
            //     if ($fs21 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsj3104 == '1'){
            //     if ($fs21 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp1513 == '1' && $row->scsr3323 == '1'){
            //     if ($fs21 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP1513', 'sub_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_value' =>'1']);
            //     }
            // }

            // //*********************************************************/
			// // 		Comparison S22 SECI1013 - (S1 - S21 & S23 - S35) 
			// //*********************************************************/
			// if ($row->seci1013 == '1' && $row->scsj2013 == '1'){
            //     if ($fs22 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsr4283 == '1'){
            //     if ($fs22 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsr2033 == '1'){
            //     if ($fs22 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->seci1013 == '1' && $row->scsv2113 == '1'){
            //     if ($fs22 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsr3443 == '1'){
            //     if ($fs22 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsr4453 == '1'){
            //     if ($fs22 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->seci1013 == '1' && $row->scsr4493 == '1'){
            //     if ($fs22 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->seci1013 == '1' && $row->scsv1223 == '1'){
            //     if ($fs22 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsr3242 == '1'){
            //     if ($fs22 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->seci1013 == '1' && $row->scsr3413 == '1'){
            //     if ($fs22 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->seci1013 == '1' && $row->scsr3253 == '1'){
            //     if ($fs22 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsj2154 == '1'){
            //     if ($fs22 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs22 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsr4973 == '1'){
            //     if ($fs22 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->seci1013 == '1' && $row->scsd2523 == '1'){
            //     if ($fs22 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsr4473 == '1'){
            //     if ($fs22 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsj3553 == '1'){
            //     if ($fs22 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsi2143 == '1'){
            //     if ($fs22 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsr2043 == '1'){
            //     if ($fs22 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsi1113 == '1'){
            //     if ($fs22 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsp1513 == '1'){
            //     if ($fs22 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsj1013 == '1'){
            //     if ($fs22 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsr1013 == '1'){
            //     if ($fs22 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsj1023 == '1'){
            //     if ($fs22 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsr1213 == '1'){
            //     if ($fs22 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsp2613 == '1'){
            //     if ($fs22 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsj2203 == '1'){
            //     if ($fs22 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsj3203 == '1'){
            //     if ($fs22 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsr2242 == '1'){
            //     if ($fs22 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsr2941 == '1'){
            //     if ($fs22 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsj3104 == '1'){
            //     if ($fs22 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->seci1013 == '1' && $row->scsr3323 == '1'){
            //     if ($fs22 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SECI1013', 'sub_name' => 'DISCRETE STRUCTURE','sub_value' =>'1']);
            //     }
            // }

            // //*********************************************************/
			// // 		Comparison S23 SCSJ1013 - (S1 - S22 & S24 - S35) 
			// //*********************************************************/
			// if ($row->scsj1013 == '1' && $row->scsj2013 == '1'){
            //     if ($fs23 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsr4283 == '1'){
            //     if ($fs23 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsr2033 == '1'){
            //     if ($fs23 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsj1013 == '1' && $row->scsv2113 == '1'){
            //     if ($fs23 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsr3443 == '1'){
            //     if ($fs23 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsr4453 == '1'){
            //     if ($fs23 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1013 == '1' && $row->scsr4493 == '1'){
            //     if ($fs23 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1013 == '1' && $row->scsv1223 == '1'){
            //     if ($fs23 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsr3242 == '1'){
            //     if ($fs23 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1013 == '1' && $row->scsr3413 == '1'){
            //     if ($fs23 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1013 == '1' && $row->scsr3253 == '1'){
            //     if ($fs23 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsj2154 == '1'){
            //     if ($fs23 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs23 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsr4973 == '1'){
            //     if ($fs23 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1013 == '1' && $row->scsd2523 == '1'){
            //     if ($fs23 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsr4473 == '1'){
            //     if ($fs23 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsj3553 == '1'){
            //     if ($fs23 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsi2143 == '1'){
            //     if ($fs23 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsr2043 == '1'){
            //     if ($fs23 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsi1113 == '1'){
            //     if ($fs23 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsp1513 == '1'){
            //     if ($fs23 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->seci1013 == '1'){
            //     if ($fs23 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsr1013 == '1'){
            //     if ($fs23 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsj1023 == '1'){
            //     if ($fs23 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsr1213 == '1'){
            //     if ($fs23 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsp2613 == '1'){
            //     if ($fs23 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsj2203 == '1'){
            //     if ($fs23 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsj3203 == '1'){
            //     if ($fs23 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsr2242 == '1'){
            //     if ($fs23 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsr2941 == '1'){
            //     if ($fs23 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsj3104 == '1'){
            //     if ($fs23 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1013 == '1' && $row->scsr3323 == '1'){
            //     if ($fs23 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1013', 'sub_name' => 'PROGRAMMING TECHNIQUE','sub_value' =>'1']);
            //     }
            // }

            // //*********************************************************/
			// // 		Comparison S24 SCSR1013 - (S1 - S23 & S25 - S35) 
			// //*********************************************************/
			// if ($row->scsr1013 == '1' && $row->scsj2013 == '1'){
            //     if ($fs24 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsr4283 == '1'){
            //     if ($fs24 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsr2033 == '1'){
            //     if ($fs24 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr1013 == '1' && $row->scsv2113 == '1'){
            //     if ($fs24 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsr3443 == '1'){
            //     if ($fs24 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsr4453 == '1'){
            //     if ($fs24 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr1013 == '1' && $row->scsr4493 == '1'){
            //     if ($fs24 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr1013 == '1' && $row->scsv1223 == '1'){
            //     if ($fs24 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsr3242 == '1'){
            //     if ($fs24 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr1013 == '1' && $row->scsr3413 == '1'){
            //     if ($fs24 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr1013 == '1' && $row->scsr3253 == '1'){
            //     if ($fs24 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsj2154 == '1'){
            //     if ($fs24 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs24 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsr4973 == '1'){
            //     if ($fs24 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr1013 == '1' && $row->scsd2523 == '1'){
            //     if ($fs24 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsr4473 == '1'){
            //     if ($fs24 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsj3553 == '1'){
            //     if ($fs24 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsi2143 == '1'){
            //     if ($fs24 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsr2043 == '1'){
            //     if ($fs24 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsi1113 == '1'){
            //     if ($fs24 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsp1513 == '1'){
            //     if ($fs24 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->seci1013 == '1'){
            //     if ($fs24 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsj1013 == '1'){
            //     if ($fs24 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsj1023 == '1'){
            //     if ($fs24 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsr1213 == '1'){
            //     if ($fs24 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsp2613 == '1'){
            //     if ($fs24 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsj2203 == '1'){
            //     if ($fs24 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsj3203 == '1'){
            //     if ($fs24 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsr2242 == '1'){
            //     if ($fs24 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsr2941 == '1'){
            //     if ($fs24 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsj3104 == '1'){
            //     if ($fs24 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr1013 == '1' && $row->scsr3323 == '1'){
            //     if ($fs24 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1013', 'sub_name' => 'DIGITAL LOGIC','sub_value' =>'1']);
            //     }
            // }

            // //*********************************************************/
			// // 		Comparison S25 SCSJ1023 - (S1 - S24 & S26 - S35) 
			// //*********************************************************/
			// if ($row->scsj1023 == '1' && $row->scsj2013 == '1'){
            //     if ($fs25 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr4283 == '1'){
            //     if ($fs25 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr2033 == '1'){
            //     if ($fs25 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsj1023 == '1' && $row->scsv2113 == '1'){
            //     if ($fs25 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr3443 == '1'){
            //     if ($fs25 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr4453 == '1'){
            //     if ($fs25 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1023 == '1' && $row->scsr4493 == '1'){
            //     if ($fs25 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1023 == '1' && $row->scsv1223 == '1'){
            //     if ($fs25 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr3242 == '1'){
            //     if ($fs25 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1023 == '1' && $row->scsr3413 == '1'){
            //     if ($fs25 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1023 == '1' && $row->scsr3253 == '1'){
            //     if ($fs25 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsj2154 == '1'){
            //     if ($fs25 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs25 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr4973 == '1'){
            //     if ($fs25 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1023 == '1' && $row->scsd2523 == '1'){
            //     if ($fs25 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr4473 == '1'){
            //     if ($fs25 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsj3553 == '1'){
            //     if ($fs25 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsi2143 == '1'){
            //     if ($fs25 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr2043 == '1'){
            //     if ($fs25 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsi1113 == '1'){
            //     if ($fs25 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsp1513 == '1'){
            //     if ($fs25 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->seci1013 == '1'){
            //     if ($fs25 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsj1013 == '1'){
            //     if ($fs25 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr1013 == '1'){
            //     if ($fs25 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr1213 == '1'){
            //     if ($fs25 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsp2613 == '1'){
            //     if ($fs25 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsj2203 == '1'){
            //     if ($fs25 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsj3203 == '1'){
            //     if ($fs25 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr2242 == '1'){
            //     if ($fs25 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr2941 == '1'){
            //     if ($fs25 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsj3104 == '1'){
            //     if ($fs25 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr3323 == '1'){
            //     if ($fs25 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ1023', 'sub_name' => 'PROGRAMMING TECHNIQUE II','sub_value' =>'1']);
            //     }
            // }

            // //*********************************************************/
			// // 		Comparison S26 SCSR1213 - (S1 - S25 & S27 - S35) 
			// //*********************************************************/
			// if ($row->scsj1023 == '1' && $row->scsj2013 == '1'){
            //     if ($fs26 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr4283 == '1'){
            //     if ($fs26 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr2033 == '1'){
            //     if ($fs26 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsj1023 == '1' && $row->scsv2113 == '1'){
            //     if ($fs26 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr3443 == '1'){
            //     if ($fs26 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr4453 == '1'){
            //     if ($fs26 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1023 == '1' && $row->scsr4493 == '1'){
            //     if ($fs26 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1023 == '1' && $row->scsv1223 == '1'){
            //     if ($fs26 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr3242 == '1'){
            //     if ($fs26 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1023 == '1' && $row->scsr3413 == '1'){
            //     if ($fs26 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1023 == '1' && $row->scsr3253 == '1'){
            //     if ($fs26 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsj2154 == '1'){
            //     if ($fs26 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs26 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr4973 == '1'){
            //     if ($fs26 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj1023 == '1' && $row->scsd2523 == '1'){
            //     if ($fs26 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr4473 == '1'){
            //     if ($fs26 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsj3553 == '1'){
            //     if ($fs26 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsi2143 == '1'){
            //     if ($fs26 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr2043 == '1'){
            //     if ($fs26 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsi1113 == '1'){
            //     if ($fs26 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsp1513 == '1'){
            //     if ($fs26 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->seci1013 == '1'){
            //     if ($fs26 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsj1013 == '1'){
            //     if ($fs26 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr1013 == '1'){
            //     if ($fs26 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr1213 == '1'){
            //     if ($fs26 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsp2613 == '1'){
            //     if ($fs26 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsj2203 == '1'){
            //     if ($fs26 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsj3203 == '1'){
            //     if ($fs26 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr2242 == '1'){
            //     if ($fs26 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr2941 == '1'){
            //     if ($fs26 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsj3104 == '1'){
            //     if ($fs26 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj1023 == '1' && $row->scsr3323 == '1'){
            //     if ($fs26 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR1213', 'sub_name' => 'NETWORK COMMUNICATION','sub_value' =>'1']);
            //     }
            // }

            // //*********************************************************/
			// // 		Comparison S27 SCSP2613 - (S1 - S26 & S28 - S35) 
			// //*********************************************************/
			// if ($row->scsp2613 == '1' && $row->scsj2013 == '1'){
            //     if ($fs27 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsr4283 == '1'){
            //     if ($fs27 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsr2033 == '1'){
            //     if ($fs27 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsp2613 == '1' && $row->scsv2113 == '1'){
            //     if ($fs27 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsr3443 == '1'){
            //     if ($fs27 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsr4453 == '1'){
            //     if ($fs27 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsp2613 == '1' && $row->scsr4493 == '1'){
            //     if ($fs27 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsp2613 == '1' && $row->scsv1223 == '1'){
            //     if ($fs27 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsr3242 == '1'){
            //     if ($fs27 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsp2613 == '1' && $row->scsr3413 == '1'){
            //     if ($fs27 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsp2613 == '1' && $row->scsr3253 == '1'){
            //     if ($fs27 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsj2154 == '1'){
            //     if ($fs27 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs27 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsr4973 == '1'){
            //     if ($fs27 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsp2613 == '1' && $row->scsd2523 == '1'){
            //     if ($fs27 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsr4473 == '1'){
            //     if ($fs27 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsj3553 == '1'){
            //     if ($fs27 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsi2143 == '1'){
            //     if ($fs27 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsr2043 == '1'){
            //     if ($fs27 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsi1113 == '1'){
            //     if ($fs27 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsp1513 == '1'){
            //     if ($fs27 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->seci1013 == '1'){
            //     if ($fs27 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsj1013 == '1'){
            //     if ($fs27 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsr1013 == '1'){
            //     if ($fs27 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsr1213 == '1'){
            //     if ($fs27 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsj1023 == '1'){
            //     if ($fs27 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsj2203 == '1'){
            //     if ($fs27 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsj3203 == '1'){
            //     if ($fs27 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsr2242 == '1'){
            //     if ($fs27 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsr2941 == '1'){
            //     if ($fs27 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsj3104 == '1'){
            //     if ($fs27 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsp2613 == '1' && $row->scsr3323 == '1'){
            //     if ($fs27 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSP2613', 'sub_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_value' =>'1']);
            //     }
            // }

            // // *********************************************************/
			// // 		Comparison S28 SCSJ2203 - (S1 - S27 & S29 - S35) 
			// // *********************************************************/
			// if ($row->scsj2203 == '1' && $row->scsj2013 == '1'){
            //     if ($fs28 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsr4283 == '1'){
            //     if ($fs28 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsr2033 == '1'){
            //     if ($fs28 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsj2203 == '1' && $row->scsv2113 == '1'){
            //     if ($fs28 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsr3443 == '1'){
            //     if ($fs28 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsr4453 == '1'){
            //     if ($fs28 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2203 == '1' && $row->scsr4493 == '1'){
            //     if ($fs28 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2203 == '1' && $row->scsv1223 == '1'){
            //     if ($fs28 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsr3242 == '1'){
            //     if ($fs28 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2203 == '1' && $row->scsr3413 == '1'){
            //     if ($fs28 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2203 == '1' && $row->scsr3253 == '1'){
            //     if ($fs28 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsj2154 == '1'){
            //     if ($fs28 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs28 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsr4973 == '1'){
            //     if ($fs28 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj2203 == '1' && $row->scsd2523 == '1'){
            //     if ($fs28 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsr4473 == '1'){
            //     if ($fs28 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsj3553 == '1'){
            //     if ($fs28 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsi2143 == '1'){
            //     if ($fs28 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsr2043 == '1'){
            //     if ($fs28 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsi1113 == '1'){
            //     if ($fs28 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsp1513 == '1'){
            //     if ($fs28 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->seci1013 == '1'){
            //     if ($fs28 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsj1013 == '1'){
            //     if ($fs28 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsr1013 == '1'){
            //     if ($fs28 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsr1213 == '1'){
            //     if ($fs28 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsj1023 == '1'){
            //     if ($fs28 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsp2613 == '1'){
            //     if ($fs28 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsj3203 == '1'){
            //     if ($fs28 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsr2242 == '1'){
            //     if ($fs28 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsr2941 == '1'){
            //     if ($fs28 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsj3104 == '1'){
            //     if ($fs28 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj2203 == '1' && $row->scsr3323 == '1'){
            //     if ($fs28 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ2203', 'sub_name' => 'SOFTWARE ENGINEERING','sub_value' =>'1']);
            //     }
            // }

            // // *********************************************************/
			// // 		Comparison S29 SCSJ3203 - (S1 - S28 & S32 - S35) 
			// // *********************************************************/
			// if ($row->scsj3203 == '1' && $row->scsj2013 == '1'){
            //     if ($fs29 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsr4283 == '1'){
            //     if ($fs29 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsr2033 == '1'){
            //     if ($fs29 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsj3203 == '1' && $row->scsv2113 == '1'){
            //     if ($fs29 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsr3443 == '1'){
            //     if ($fs29 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsr4453 == '1'){
            //     if ($fs29 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3203 == '1' && $row->scsr4493 == '1'){
            //     if ($fs29 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3203 == '1' && $row->scsv1223 == '1'){
            //     if ($fs29 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsr3242 == '1'){
            //     if ($fs29 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3203 == '1' && $row->scsr3413 == '1'){
            //     if ($fs29 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3203 == '1' && $row->scsr3253 == '1'){
            //     if ($fs29 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsj2154 == '1'){
            //     if ($fs29 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs29 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsr4973 == '1'){
            //     if ($fs29 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3203 == '1' && $row->scsd2523 == '1'){
            //     if ($fs29 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsr4473 == '1'){
            //     if ($fs29 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsj3553 == '1'){
            //     if ($fs29 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsi2143 == '1'){
            //     if ($fs29 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsr2043 == '1'){
            //     if ($fs29 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsi1113 == '1'){
            //     if ($fs29 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsp1513 == '1'){
            //     if ($fs29 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->seci1013 == '1'){
            //     if ($fs29 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsj1013 == '1'){
            //     if ($fs29 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsr1013 == '1'){
            //     if ($fs29 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsr1213 == '1'){
            //     if ($fs29 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsj1023 == '1'){
            //     if ($fs29 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsp2613 == '1'){
            //     if ($fs29 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsj2203 == '1'){
            //     if ($fs29 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsr2242 == '1'){
            //     if ($fs29 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsr2941 == '1'){
            //     if ($fs29 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsj3104 == '1'){
            //     if ($fs29 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3203 == '1' && $row->scsr3323 == '1'){
            //     if ($fs29 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3203', 'sub_name' => 'THEORY OF COMPUTER SCIENCE','sub_value' =>'1']);
            //     }
            // }

            // // *********************************************************/
			// // 		Comparison S32 SCSR2242 - (S1 - S29 & S33 - S35) 
			// // *********************************************************/
			// if ($row->scsr2242 == '1' && $row->scsj2013 == '1'){
            //     if ($fs32 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsr4283 == '1'){
            //     if ($fs32 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsr2033 == '1'){
            //     if ($fs32 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr2242 == '1' && $row->scsv2113 == '1'){
            //     if ($fs32 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsr3443 == '1'){
            //     if ($fs32 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsr4453 == '1'){
            //     if ($fs32 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2242 == '1' && $row->scsr4493 == '1'){
            //     if ($fs32 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2242 == '1' && $row->scsv1223 == '1'){
            //     if ($fs32 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsr3242 == '1'){
            //     if ($fs32 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2242 == '1' && $row->scsr3413 == '1'){
            //     if ($fs32 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2242 == '1' && $row->scsr3253 == '1'){
            //     if ($fs32 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsj2154 == '1'){
            //     if ($fs32 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs32 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsr4973 == '1'){
            //     if ($fs32 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2242 == '1' && $row->scsd2523 == '1'){
            //     if ($fs32 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsr4473 == '1'){
            //     if ($fs32 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsj3553 == '1'){
            //     if ($fs32 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsi2143 == '1'){
            //     if ($fs32 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsr2043 == '1'){
            //     if ($fs32 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsi1113 == '1'){
            //     if ($fs32 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsp1513 == '1'){
            //     if ($fs32 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->seci1013 == '1'){
            //     if ($fs32 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsj1013 == '1'){
            //     if ($fs32 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsr1013 == '1'){
            //     if ($fs32 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsr1213 == '1'){
            //     if ($fs32 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsj1023 == '1'){
            //     if ($fs32 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsp2613 == '1'){
            //     if ($fs32 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsj2203 == '1'){
            //     if ($fs32 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsj3203 == '1'){
            //     if ($fs32 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsr2941 == '1'){
            //     if ($fs32 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsj3104 == '1'){
            //     if ($fs32 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2242 == '1' && $row->scsr3323 == '1'){
            //     if ($fs32 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2242', 'sub_name' => 'COMPUTER NETWORK','sub_value' =>'1']);
            //     }
            // }

            // // *********************************************************/
			// // 		Comparison S33 SCSR2941 - (S1 - S32 & S34 - S35) 
			// // *********************************************************/
			// if ($row->scsr2941 == '1' && $row->scsj2013 == '1'){
            //     if ($fs33 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsr4283 == '1'){
            //     if ($fs33 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsr2033 == '1'){
            //     if ($fs33 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsr2941 == '1' && $row->scsv2113 == '1'){
            //     if ($fs33 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsr3443 == '1'){
            //     if ($fs33 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsr4453 == '1'){
            //     if ($fs33 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2941 == '1' && $row->scsr4493 == '1'){
            //     if ($fs33 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2941 == '1' && $row->scsv1223 == '1'){
            //     if ($fs33 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsr3242 == '1'){
            //     if ($fs33 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2941 == '1' && $row->scsr3413 == '1'){
            //     if ($fs33 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2941 == '1' && $row->scsr3253 == '1'){
            //     if ($fs33 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsj2154 == '1'){
            //     if ($fs33 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs33 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsr4973 == '1'){
            //     if ($fs33 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsr2941 == '1' && $row->scsd2523 == '1'){
            //     if ($fs33 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsr4473 == '1'){
            //     if ($fs33 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsj3553 == '1'){
            //     if ($fs33 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsi2143 == '1'){
            //     if ($fs33 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsr2043 == '1'){
            //     if ($fs33 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsi1113 == '1'){
            //     if ($fs33 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsp1513 == '1'){
            //     if ($fs33 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->seci1013 == '1'){
            //     if ($fs33 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsj1013 == '1'){
            //     if ($fs33 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsr1013 == '1'){
            //     if ($fs33 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsr1213 == '1'){
            //     if ($fs33 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsj1023 == '1'){
            //     if ($fs33 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsp2613 == '1'){
            //     if ($fs33 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsj2203 == '1'){
            //     if ($fs33 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsj3203 == '1'){
            //     if ($fs33 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsr2242 == '1'){
            //     if ($fs33 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsj3104 == '1'){
            //     if ($fs33 != null && $fs34 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsr2941 == '1' && $row->scsr3323 == '1'){
            //     if ($fs33 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSR2941', 'sub_name' => 'COMPUTER NETWORK LAB','sub_value' =>'1']);
            //     }
            // }

            // // *********************************************************/
			// // 		Comparison S34 SCSJ3104 - (S1 - S33 & S35) 
			// // *********************************************************/
			// if ($row->scsj3104 == '1' && $row->scsj2013 == '1'){
            //     if ($fs34 != null && $fs1 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsr4283 == '1'){
            //     if ($fs34 != null && $fs2 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsr2033 == '1'){
            //     if ($fs34 != null && $fs3 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }
     	
            // if ($row->scsj3104 == '1' && $row->scsv2113 == '1'){
            //     if ($fs34 != null && $fs4 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsr3443 == '1'){
            //     if ($fs34 != null && $fs5 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsr4453 == '1'){
            //     if ($fs34 != null && $fs6 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3104 == '1' && $row->scsr4493 == '1'){
            //     if ($fs34 != null && $fs7 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3104 == '1' && $row->scsv1223 == '1'){
            //     if ($fs34 != null && $fs8 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsr3242 == '1'){
            //     if ($fs34 != null && $fs9 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3104 == '1' && $row->scsr3413 == '1'){
            //     if ($fs34 != null && $fs10 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3104 == '1' && $row->scsr3253 == '1'){
            //     if ($fs34 != null && $fs11 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsj2154 == '1'){
            //     if ($fs34 != null && $fs12 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->ucsd2762 == '1'){
            //     if ($fs34 != null && $fs13 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsr4973 == '1'){
            //     if ($fs34 != null && $fs14 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }
            
            // if ($row->scsj3104 == '1' && $row->scsd2523 == '1'){
            //     if ($fs34 != null && $fs15 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsr4473 == '1'){
            //     if ($fs34 != null && $fs16 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsj3553 == '1'){
            //     if ($fs34 != null && $fs17 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsi2143 == '1'){
            //     if ($fs34 != null && $fs18 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsr2043 == '1'){
            //     if ($fs34 != null && $fs19 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsi1113 == '1'){
            //     if ($fs34 != null && $fs20 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsp1513 == '1'){
            //     if ($fs34 != null && $fs21 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->seci1013 == '1'){
            //     if ($fs34 != null && $fs22 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsj1013 == '1'){
            //     if ($fs34 != null && $fs23 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsr1013 == '1'){
            //     if ($fs34 != null && $fs24 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsr1213 == '1'){
            //     if ($fs34 != null && $fs25 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsj1023 == '1'){
            //     if ($fs34 != null && $fs26 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsp2613 == '1'){
            //     if ($fs34 != null && $fs27 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsj2203 == '1'){
            //     if ($fs34 != null && $fs28 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsj3203 == '1'){
            //     if ($fs34 != null && $fs29 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsr2242 == '1'){
            //     if ($fs34 != null && $fs32 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsr2941 == '1'){
            //     if ($fs34 != null && $fs33 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // if ($row->scsj3104 == '1' && $row->scsr3323 == '1'){
            //     if ($fs34 != null && $fs35 != null) {
			// 	    $save = Value::insert(['sub_code' => 'SCSJ3104', 'sub_name' => 'APPLICATION DEVELOPMENT','sub_value' =>'1']);
            //     }
            // }

            // // *********************************************************/
			// // 		Comparison S35 SCSR3323 - (S1 - S34) 
			// // *********************************************************/
			if ($row->scsr3323 == '1' && $row->scsj2013 == '1'){
                if ($fs35 != null && $fs1 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsr4283 == '1'){
                if ($fs35 != null && $fs2 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsr2033 == '1'){
                if ($fs35 != null && $fs3 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }
     	
            if ($row->scsr3323 == '1' && $row->scsv2113 == '1'){
                if ($fs35 != null && $fs4 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsr3443 == '1'){
                if ($fs35 != null && $fs5 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsr4453 == '1'){
                if ($fs35 != null && $fs6 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }
            
            if ($row->scsr3323 == '1' && $row->scsr4493 == '1'){
                if ($fs35 != null && $fs7 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }
            
            if ($row->scsr3323 == '1' && $row->scsv1223 == '1'){
                if ($fs35 != null && $fs8 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsr3242 == '1'){
                if ($fs35 != null && $fs9 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }
            
            if ($row->scsr3323 == '1' && $row->scsr3413 == '1'){
                if ($fs35 != null && $fs10 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }
            
            if ($row->scsr3323 == '1' && $row->scsr3253 == '1'){
                if ($fs35 != null && $fs11 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsj2154 == '1'){
                if ($fs35 != null && $fs12 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->ucsd2762 == '1'){
                if ($fs35 != null && $fs13 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsr4973 == '1'){
                if ($fs35 != null && $fs14 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }
            
            if ($row->scsr3323 == '1' && $row->scsd2523 == '1'){
                if ($fs35 != null && $fs15 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsr4473 == '1'){
                if ($fs35 != null && $fs16 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsj3553 == '1'){
                if ($fs35 != null && $fs17 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsi2143 == '1'){
                if ($fs35 != null && $fs18 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsr2043 == '1'){
                if ($fs35 != null && $fs19 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsi1113 == '1'){
                if ($fs35 != null && $fs20 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsp1513 == '1'){
                if ($fs35 != null && $fs21 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->seci1013 == '1'){
                if ($fs35 != null && $fs22 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsj1013 == '1'){
                if ($fs35 != null && $fs23 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsr1013 == '1'){
                if ($fs35 != null && $fs24 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsr1213 == '1'){
                if ($fs35 != null && $fs25 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsj1023 == '1'){
                if ($fs35 != null && $fs26 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsp2613 == '1'){
                if ($fs35 != null && $fs27 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsj2203 == '1'){
                if ($fs35 != null && $fs28 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsj3203 == '1'){
                if ($fs35 != null && $fs29 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsr2242 == '1'){
                if ($fs35 != null && $fs32 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsr2941 == '1'){
                if ($fs35 != null && $fs33 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }

            if ($row->scsr3323 == '1' && $row->scsj3104 == '1'){
                if ($fs35 != null && $fs34 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR3323', 'sub_name' => 'NETCENTRIC COMPUTING','sub_value' =>'1']);
                }
            }
        }
    }

}
                


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

			// //*********************************************************/
			// // 		Comparison S6 SCSR4453 - (S1 - S5 & S7-S20) 
			// //*********************************************************/
			if ($row->scsr4453 == '1' && $row->scsj2013 == '1'){
                if ($fs6 != null && $fs1 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }

            if ($row->scsr4453 == '1' && $row->scsr4283 == '1'){
                if ($fs6 != null && $fs2 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }

            if ($row->scsr4453 == '1' && $row->scsr2033 == '1'){
                if ($fs6 != null && $fs3 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }
     	
            if ($row->scsr4453 == '1' && $row->scsv2113 == '1'){
                if ($fs6 != null && $fs4 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }

            if ($row->scsr4453 == '1' && $row->scsr3443 == '1'){
                if ($fs6 != null && $fs5 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }

            if ($row->scsr4453 == '1' && $row->scsr4493 == '1'){
                if ($fs6 != null && $fs7 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }
            
            if ($row->scsr4453 == '1' && $row->scsv1223 == '1'){
                if ($fs6 != null && $fs8 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }
            
            if ($row->scsr4453 == '1' && $row->scsr3242 == '1'){
                if ($fs6 != null && $fs9 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }

            if ($row->scsr4453 == '1' && $row->scsr3413 == '1'){
                if ($fs6 != null && $fs10 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }
            
            if ($row->scsr4453 == '1' && $row->scsr3253 == '1'){
                if ($fs6 != null && $fs11 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }
            
            if ($row->scsr4453 == '1' && $row->scsj2154 == '1'){
                if ($fs6 != null && $fs12 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }

            if ($row->scsr4453 == '1' && $row->ucsd2762 == '1'){
                if ($fs6 != null && $fs13 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }

            if ($row->scsr4453 == '1' && $row->scsr4973 == '1'){
                if ($fs6 != null && $fs14 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }

            if ($row->scsr4453 == '1' && $row->scsd2523 == '1'){
                if ($fs6 != null && $fs15 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }
            
            if ($row->scsr4453 == '1' && $row->scsr4473 == '1'){
                if ($fs6 != null && $fs16 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }

            if ($row->scsr4453 == '1' && $row->scsj3553 == '1'){
                if ($fs6 != null && $fs17 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }

            if ($row->scsr4453 == '1' && $row->scsi2143 == '1'){
                if ($fs6 != null && $fs18 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }

            if ($row->scsr4453 == '1' && $row->scsr2043 == '1'){
                if ($fs6 != null && $fs19 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }

            if ($row->scsr4453 == '1' && $row->scsi1113 == '1'){
                if ($fs6 != null && $fs20 != null) {
				    $save = Value::insert(['sub_code' => 'SCSR4453', 'sub_name' => 'NETWORK SECURITY','sub_value' =>'1']);
                }
            }

			// //*********************************************************/
			// // 		Comparison S7 SCSR4493 - (S1 - S6 & S8-S20) 
			// //*********************************************************/
			// if ($row->scsr4493 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->scsr4493 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->scsr4493 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->scsr4493 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsv1223 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsr3242 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsr3413 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsr3253 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsj2154 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->ucsd2762 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsr4973 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsd2523 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsr4473 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsj3553 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsi2143 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsr2043 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4493 == '1' && $row->scsi1113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4493', 'sub_name' => 'COMPUTER FORENSIC','sub_value' =>'1']);
			// 		}
            // 	}
			// }

			// //*********************************************************/
			// // 		Comparison S8 SCSV1223 - (S1 - S7 & S9-S20) 
			// //*********************************************************/
			// if ($row->scsv1223 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->scsv1223 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->scsv1223 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->scsv1223 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsr4493 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsr3242 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsr3413 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsr3253 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsj2154 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->ucsd2762 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsr4973 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsd2523 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsr4473 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsj3553 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsi2143 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsr2043 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsv1223 == '1' && $row->scsi1113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSV1223', 'sub_name' => 'WEB PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
			// }

			// //*********************************************************/
			// // 		Comparison S9 SCSR3242 - (S1 - S8 & S10-S20) 
			// //*********************************************************/
			// if ($row->scsr3242 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->scsr3242 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->scsr3242 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->scsr3242 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsr4493 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsv1223 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsr3413 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsr3253 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsj2154 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->ucsd2762 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsr4973 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsd2523 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsr4473 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsj3553 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsi2143 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsr2043 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3242 == '1' && $row->scsi1113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3242', 'sub_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_value' =>'1']);
			// 		}
            // 	}
			// }

			// //*********************************************************/
			// // 		Comparison S10 SCSR3413 - (S1 - S9 & S11-S20) 
			// //*********************************************************/
			// if ($row->scsr3413 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->scsr3413 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->scsr3413 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->scsr3413 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsr4493 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsv1223 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsr3242 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsr3253 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsj2154 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->ucsd2762 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsr4973 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsd2523 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsr4473 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsj3553 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsi2143 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsr2043 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3413 == '1' && $row->scsi1113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3413', 'sub_name' => 'COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
			// }

			// //*********************************************************/
			// // 		Comparison S11 SCSR3253 - (S1 - S10 & S12-S20) 
			// //*********************************************************/
			// if ($row->scsr3253 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->scsr3253 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->scsr3253 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->scsr3253 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsr4493 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsv1223 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsr3242 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsr3413 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsj2154 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->ucsd2762 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsr4973 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsd2523 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsr4473 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsj3553 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsi2143 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsr2043 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr3253 == '1' && $row->scsi1113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR3253', 'sub_name' => 'NETWORK PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
			// }

			// //*********************************************************/
			// // 		Comparison S12 SCSJ2154 - (S1 - S11 & S13-S20) 
			// //*********************************************************/
			// if ($row->scsj2154 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->scsj2154 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->scsj2154 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->scsj2154 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsr4493 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsv1223 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsr3242 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsr3413 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsr3253 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->ucsd2762 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsr4973 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsd2523 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsr4473 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsj3553 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsi2143 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsr2043 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj2154 == '1' && $row->scsi1113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ2154', 'sub_name' => 'OBJECT ORIENTED PROGRAMMING','sub_value' =>'1']);
			// 		}
            // 	}
			// }

			// //*********************************************************/
			// // 		Comparison S13 UCSD2762 - (S1 - S12 & S14-S20) 
			// //*********************************************************/
			// if ($row->ucsd2762 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->ucsd2762 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->ucsd2762 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->ucsd2762 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsr4493 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsv1223 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsr3242 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsr3413 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsr3253 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsj2154 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsr4973 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsd2523 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsr4473 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsj3553 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsi2143 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsr2043 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->ucsd2762 == '1' && $row->scsi1113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'UCSD2762', 'sub_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_value' =>'1']);
			// 		}
            // 	}
			// }

			// //*********************************************************/
			// // 		Comparison S14 SCSR4973 - (S1 - S13 & S15-S20) 
			// //*********************************************************/
			// if ($row->scsr4973 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->scsr4973 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->scsr4973 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->scsr4973 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsr4493 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsv1223 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsr3242 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsr3413 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsr3253 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsj2154 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->ucsd2762 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsd2523 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsr4473 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsj3553 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsi2143 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsr2043 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4973 == '1' && $row->scsi1113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4973', 'sub_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_value' =>'1']);
			// 		}
            // 	}
			// }

			// //*********************************************************/
			// // 		Comparison S15 SCSD2523 - (S1 - S14 & S16-S20) 
			// //*********************************************************/
			// if ($row->scsd2523 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->scsd2523 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->scsd2523 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->scsd2523 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsr4493 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsv1223 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsr3242 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsr3413 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsr3253 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsj2154 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->ucsd2762 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsr4973 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsr4473 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsj3553 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsi2143 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsr2043 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsd2523 == '1' && $row->scsi1113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSD2523', 'sub_name' => 'DATABASE','sub_value' =>'1']);
			// 		}
            // 	}
			// }

			// //*********************************************************/
			// // 		Comparison S16 SCSR4473 - (S1 - S15 & S17-S20) 
			// //*********************************************************/
			// if ($row->scsr4473 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->scsr4473 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->scsr4473 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->scsr4473 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsr4493 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsv1223 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsr3242 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsr3413 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsr3253 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsj2154 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->ucsd2762 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsr4973 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsd2523 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsj3553 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsi2143 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsr2043 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr4473 == '1' && $row->scsi1113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR4473', 'sub_name' => 'SECURITY MANAGEMENT','sub_value' =>'1']);
			// 		}
            // 	}
			// }

			// //*********************************************************/
			// // 		Comparison S17 SCSJ3553 - (S1 - S16 & S18-S20) 
			// //*********************************************************/
			// if ($row->scsj3553 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->scsj3553 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->scsj3553 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->scsj3553 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsr4493 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsv1223 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsr3242 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsr3413 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsr3253 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsj2154 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->ucsd2762 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsr4973 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsd2523 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsr4473 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsi2143 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsr2043 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsj3553 == '1' && $row->scsi1113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSJ3553', 'sub_name' => 'ARTIFICIAL INTELLIGENCE','sub_value' =>'1']);
			// 		}
            // 	}
			// }

			// //*********************************************************/
			// // 		Comparison S18 SCSI2143 - (S1 - S17 & S19-S20) 
			// //*********************************************************/
			// if ($row->scsi2143 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->scsi2143 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->scsi2143 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->scsi2143 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsr4493 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsv1223 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsr3242 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsr3413 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsr3253 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsj2154 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->ucsd2762 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsr4973 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsd2523 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsr4473 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsj3553 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsr2043 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi2143 == '1' && $row->scsi1113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI2143', 'sub_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_value' =>'1']);
			// 		}
            // 	}
			// }

			// //*********************************************************/
			// // 		Comparison S19 SCSR2043 - (S1 - S18 & S20) 
			// //*********************************************************/
			// if ($row->scsr2043 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->scsr2043 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->scsr2043 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->scsr2043 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsr4493 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsv1223 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsr3242 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsr3413 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsr3253 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsj2154 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->ucsd2762 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsr4973 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsd2523 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsr4473 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsj3553 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsi2143 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsr2043 == '1' && $row->scsi1113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSR2043', 'sub_name' => 'OPERATING SYSTEMS','sub_value' =>'1']);
			// 		}
            // 	}
			// }

			// //*********************************************************/
			// // 		Comparison S20 SCSI1113 - (S1 - S19) 
			// //*********************************************************/
			// if ($row->scsi1113 == '1' && $row->scsj2013 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2013' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            
			// }
			// if ($row->scsi1113 == '1' && $row->scsr4283 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4283' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }

            // if ($row->scsi1113 == '1' && $row->scsr2033 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2033' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
        
            // if ($row->scsi1113 == '1' && $row->scsv2113 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV2113' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsr3443 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3443' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsr4453 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4453' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsr4493 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4493' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsv1223 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSV1223' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsr3242 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3242' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsr3413 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3413' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsr3253 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR3253' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsj2154 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ2154' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->ucsd2762 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'UCSD2762' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsr4973 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4973' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsd2523 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSD2523' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsr4473 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR4473' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsj3553 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSJ3553' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsi2143 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSI2143' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
            // }
            // if ($row->scsi1113 == '1' && $row->scsr2043 == '1') {
            // 	$fs = Subject::all();
            // 	if ($fs->sub_code = 'SCSI1113' && $fs->sub_group = 'group1') {
			// 		if ($fs->sub_code = 'SCSR2043' && $fs->sub_group = 'group1') {
			// 			$save = Value::insert(['sub_code' => 'SCSI1113', 'sub_name' => 'COMPUTATIONAL MATHEMATICS','sub_value' =>'1']);
			// 		}
            // 	}
			// }
        }
    }

}
                


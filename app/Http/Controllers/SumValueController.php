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

        $val2 = Value::where([['sub_name', '=', 'NETWORK ANALYSIS AND DESIGN SIMULATION']])->count();
        if ($val2 > 0){
            $save2 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR4283', 'sub_sum_name' => 'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_sum_value' => $val2]);
        }
    	
        $val3 = Value::where([['sub_name', '=', 'COMPUTER ORGANISATION AND ARCHITECTURE']])->count();
        if ($val3 > 0){
            $save3 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR2033', 'sub_sum_name' => 'COMPUTER ORGANISATION AND ARCHITECTURE','sub_sum_value' => $val3]);
        }
        
        $val4 = Value::where([['sub_name', '=', 'HUMAN COMPUTER INTERACTION']])->count();
        if ($val4 > 0){
            $save4 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSV2113', 'sub_sum_name' => 'HUMAN COMPUTER INTERACTION','sub_sum_value' => $val4]);
        }
        
        $val5 = Value::where([['sub_name', '=', 'CRYPTOGRAPHY']])->count();
        if ($val5 > 0){
            $save5 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR3443', 'sub_sum_name' => 'CRYPTOGRAPHY','sub_sum_value' => $val5]);
        }
        
        $val6 = Value::where([['sub_name', '=', 'NETWORK SECURITY']])->count();
        if ($val6 > 0) {
    	    $save6 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR4453', 'sub_sum_name' => 'NETWORK SECURITY','sub_sum_value' => $val6]);
        }

        $val7 = Value::where([['sub_name', '=', 'COMPUTER FORENSIC']])->count();
        if ($val7 > 0) {
    	    $save7 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR4493', 'sub_sum_name' => 'COMPUTER FORENSIC','sub_sum_value' => $val7]);
        }
    
        $val8 = Value::where([['sub_name', '=', 'WEB PROGRAMMING']])->count();
        if ($val8 > 0) {
    	    $save8 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSV1223', 'sub_sum_name' => 'WEB PROGRAMMING','sub_sum_value' => $val8]);
        }

        $val9 = Value::where([['sub_name', '=', 'INTER NETWORKING TECHNOLOGY & LAB']])->count();
        if ($val9 > 0) {
    	    $save9 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR3242', 'sub_sum_name' => 'INTER NETWORKING TECHNOLOGY & LAB','sub_sum_value' => $val9]);
        }

        $val10 = Value::where([['sub_name', '=', 'COMPUTER SECURITY']])->count();
        if ($val10 > 0) {
    	    $save10 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR3413', 'sub_sum_name' => 'COMPUTER SECURITY','sub_sum_value' => $val10]);
        }
        
        $val11 = Value::where([['sub_name', '=', 'NETWORK PROGRAMMING']])->count();
        if ($val11 > 0) {
    	    $save11 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR3253', 'sub_sum_name' => 'NETWORK PROGRAMMING','sub_sum_value' => $val11]);
        }

        $val12 = Value::where([['sub_name', '=', 'OBJECT ORIENTED PROGRAMMING']])->count();
        if ($val12 > 0) {
    	    $save12 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSJ2154', 'sub_sum_name' => 'OBJECT ORIENTED PROGRAMMING','sub_sum_value' => $val12]);
        }

        $val13 = Value::where([['sub_name', '=', 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP']])->count();
        if ($val13 > 0) {
    	    $save13 = Sumvalue::updateOrCreate(['sub_sum_code' => 'UCSD2762', 'sub_sum_name' => 'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_sum_value' => $val13]);
        }

        $val14 = Value::where([['sub_name', '=', 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY']])->count();
        if ($val14 > 0) {
    	    $save14 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR4973', 'sub_sum_name' => 'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_sum_value' => $val14]);
        }

        $val15 = Value::where([['sub_name', '=', 'DATABASE']])->count();
        if ($val15 > 0) {
    	    $save15 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSD2523', 'sub_sum_name' => 'DATABASE','sub_sum_value' => $val15]);
        }

        $val16 = Value::where([['sub_name', '=', 'SECURITY MANAGEMENT']])->count();
        if ($val16 > 0) {
    	    $save16 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR4473', 'sub_sum_name' => 'SECURITY MANAGEMENT','sub_sum_value' => $val16]);
        }

        $val17 = Value::where([['sub_name', '=', 'ARTIFICIAL INTELLIGENCE']])->count();
        if ($val17 > 0) {
    	    $save17 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSJ3553', 'sub_sum_name' => 'ARTIFICIAL INTELLIGENCE','sub_sum_value' => $val17]);
        }

        $val18 = Value::where([['sub_name', '=', 'PROBABILITY & STATISTIC DATA ANALYSIS']])->count();
        if ($val18 > 0) {
    	    $save18 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSJ3553', 'sub_sum_name' => 'PROBABILITY & STATISTIC DATA ANALYSIS','sub_sum_value' => $val18]);
        }

        $val19 = Value::where([['sub_name', '=', 'OPERATING SYSTEMS']])->count();
        if ($val19 > 0) {
    	    $save19 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR2043', 'sub_sum_name' => 'OPERATING SYSTEMS','sub_sum_value' => $val19]);
        }

        $val20 = Value::where([['sub_name', '=', 'COMPUTATIONAL MATHEMATICS']])->count();
        if ($val20 > 0) {
    	    $save20 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSI1113', 'sub_sum_name' => 'COMPUTATIONAL MATHEMATICS','sub_sum_value' => $val20]);
        }

        $val21 = Value::where([['sub_name', '=', 'TECHNOLOGY & INFORMATION SYSTEM']])->count();
        if ($val21 > 0) {
    	    $save21 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSP1513', 'sub_sum_name' => 'TECHNOLOGY & INFORMATION SYSTEM','sub_sum_value' => $val21]);
        }

        $val22 = Value::where([['sub_name', '=', 'DISCRETE STRUCTURE']])->count();
        if ($val22 > 0) {
    	    $save22 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SECI1013', 'sub_sum_name' => 'DISCRETE STRUCTURE','sub_sum_value' => $val22]);
        }

        $val23 = Value::where([['sub_name', '=', 'PROGRAMMING TECHNIQUE']])->count();
        if ($val23 > 0) {
    	    $save23 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSJ1013', 'sub_sum_name' => 'PROGRAMMING TECHNIQUE','sub_sum_value' => $val23]);
        }

        $val24 = Value::where([['sub_name', '=', 'DIGITAL LOGIC']])->count();
        if ($val24 > 0) {
    	    $save24 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR1013', 'sub_sum_name' => 'DIGITAL LOGIC','sub_sum_value' => $val24]);
        }

        $val25 = Value::where([['sub_name', '=', 'PROGRAMMING TECHNIQUE II']])->count();
        if ($val25 > 0) {
    	    $save25 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSJ1023', 'sub_sum_name' => 'PROGRAMMING TECHNIQUE II','sub_sum_value' => $val25]);
        }

        $val26 = Value::where([['sub_name', '=', 'NETWORK COMMUNICATION']])->count();
        if ($val26 > 0) {
    	    $save26 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR1213', 'sub_sum_name' => 'NETWORK COMMUNICATION','sub_sum_value' => $val26]);
        }

        $val27 = Value::where([['sub_name', '=', 'SYSTEM ANALYSIS AND DESIGN']])->count();
        if ($val27 > 0) {
    	    $save27 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSP2613', 'sub_sum_name' => 'SYSTEM ANALYSIS AND DESIGN','sub_sum_value' => $val27]);
        }

        $val28 = Value::where([['sub_name', '=', 'SOFTWARE ENGINEERING']])->count();
        if ($val28 > 0) {
    	    $save28 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSJ2203', 'sub_sum_name' => 'SOFTWARE ENGINEERING','sub_sum_value' => $val28]);
        }

        $val29 = Value::where([['sub_name', '=', 'THEORY OF COMPUTER SCIENCE']])->count();
        if ($val29 > 0) {
    	    $save29 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSJ3203', 'sub_sum_name' => 'THEORY OF COMPUTER SCIENCE','sub_sum_value' => $val29]);
        }

        $val32 = Value::where([['sub_name', '=', 'COMPUTER NETWORK']])->count();
        if ($val32 > 0) {
    	    $save32 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR2242', 'sub_sum_name' => 'COMPUTER NETWORK','sub_sum_value' => $val32]);
        }

        $val33 = Value::where([['sub_name', '=', 'COMPUTER NETWORK LAB']])->count();
        if ($val33 > 0) {
    	    $save33 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR2941', 'sub_sum_name' => 'COMPUTER NETWORK LAB','sub_sum_value' => $val33]);
        }

        $val34 = Value::where([['sub_name', '=', 'APPLICATION DEVELOPMENT']])->count();
        if ($val34 > 0) {
    	    $save34 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSJ3104', 'sub_sum_name' => 'APPLICATION DEVELOPMENT','sub_sum_value' => $val34]);
        }

        $val35 = Value::where([['sub_name', '=', 'NETCENTRIC COMPUTING']])->count();
        if ($val35 > 0) {
    	    $save35 = Sumvalue::updateOrCreate(['sub_sum_code' => 'SCSR3323', 'sub_sum_name' => 'NETCENTRIC COMPUTING','sub_sum_value' => $val35]);
        }
    }
}

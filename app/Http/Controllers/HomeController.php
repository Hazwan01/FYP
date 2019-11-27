<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Subject;
use App\Student;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard');
    }

    public function dashboardV2()
    {
        $finalyear = Student::where([['sub_left','<','10']])->get();
        foreach ($finalyear as $row) {
            if ($row->scsd1513 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'TECHNOLOGY & INFORMATION SYSTEM','sub_code'=>'SCSD1513']);  
            }
            if ($row->scsi1013 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'DISCRETE STRUCTURE','sub_code'=>'SCSI1013']);
            }
            if ($row->scsj1013 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'PROGRAMMING TECHNIQUE','sub_code'=>'SCSJ1013']); 
            }
            if ($row->scsr1013 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'DIGITAL LOGIC','sub_code'=>'SCSR1013']); 
            }
            if ($row->scsi1113 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'COMPUTATIONAL MATHEMATICS','sub_code'=>'SCSI1113']);  
            }
            if ($row->scsj1023 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'PROGRAMMING TECHNIQUE II','sub_code'=>'SCSJ1023']);   
            }
            if ($row->scsr1213 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'NETWORK COMMUNICATION','sub_code'=>'SCSR1213']);  
            }
            if ($row->scsv1223 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'WEB PROGRAMMING','sub_code'=>'SCSV1223']);  
            }
            if ($row->scsd2523 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'DATABASE','sub_code'=>'SCSD2523']);  
            }
            if ($row->scsj2013 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'DATA STRUCTURE AND ALGORITHM','sub_code'=>'SCSJ2013']);  
            }
            if ($row->scsd2613 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'SYSTEM ANALYSIS AND DESIGN','sub_code'=>'SCSD2613']);   
            }
            if ($row->scsr2033 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'COMPUTER ORGANISATION AND ARCHITECTURE','sub_code'=>'SCSR2033']);  
            }
            if ($row->scsv2113 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'HUMAN COMPUTER INTERACTION','sub_code'=>'SCSV2113']);   
            }
            if ($row->scsi2143 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'PROBABILITY & STATISTIC DATA ANALYSIS','sub_code'=>'SCSI2143']);   
            }
            if ($row->scsj2154 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'OBJECT ORIENTED PROGRAMMING','sub_code'=>'SCSJ2154']);  
            }
            if ($row->scsj2203 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'SOFTWARE ENGINEERING','sub_code'=>'SCSJ2203']);    
            }
            if ($row->scsr2043 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'OPERATING SYSTEMS','sub_code'=>'SCSR2043']);   
            }
            if ($row->scsj3203 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'THEORY OF COMPUTER SCIENCE','sub_code'=>'SCSJ3203']);    
            }
            if ($row->ucsd2762 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'INFORMATION TECHNOLOGY ENTERPRENEURSHIP','sub_code'=>'UCSD2762']);  
            }
            /*if ($row->scsr3032 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'COMPUTER NETWORK & SECURITY PROJECT 1','sub_code'=>'SCSR3032']);   
            }
            if ($row->scsr4134 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'COMPUTER NETWORK & SECURITY PROJECT 2','sub_code'=>'SCSR4134']);   
            }*/
            if ($row->scsr2242 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'COMPUTER NETWORK','sub_code'=>'SCSR2242']);   
            }
            if ($row->scsr2941 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'COMPUTER NETWORK LAB','sub_code'=>'SCSR2941']);   
            }
            if ($row->scsj3553 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'ARTIFICIAL INTELLIGENCE','sub_code'=>'SCSJ3553']);   
            }
            if ($row->scsr3104 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'APPLICATION DEVELOPMENT','sub_code'=>'SCSR3104']);   
            }
            if ($row->scsr3242 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'INTER NETWORKING TECHNOLOGY & LAB','sub_code'=>'SCSR3242']);    
            }
            if ($row->scsr3413 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'COMPUTER SECURITY','sub_code'=>'SCSR3413']);   
            }
            if ($row->scsr3443 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'CRYPTOGRAPHY','sub_code'=>'SCSR3443']);    
            }
            if ($row->scsr3253 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'NETWORK PROGRAMMING','sub_code'=>'SCSR3253']);    
            }
            if ($row->scsr3243 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'NETCENTRIC COMPUTING','sub_code'=>'SCSR3243']);   
            }
            if ($row->scsr4283 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'NETWORK ANALYSIS AND DESIGN SIMULATION','sub_code'=>'SCSR4283']);   
            }
            if ($row->scsr4453 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'NETWORK SECURITY','sub_code'=>'SCSR4453']);   
            }
            if ($row->scsr4473 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'SECURITY MANAGEMENT','sub_code'=>'SCSR4473']);   
            }
            if ($row->scsr4973 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'SPECIAL TOPICS IN NETWORK AND COMPUTER SECURITY','sub_code'=>'SCSR4973']);    
            }
            if ($row->scsr4493 == '1') {
                $save = Subject::updateOrCreate(['sub_name'=>'COMPUTER FORENSIC','sub_code'=>'SCSR4493']);   
            }
        }
        $subject = Subject::all();
        $group1 = Subject::where('sub_group','group1')->get();
        $group2 = Subject::where('sub_group','group2')->get();
        $group3 = Subject::where('sub_group','group3')->get();

        return view('dashboardV2')->with(compact('group1','group2','group3','subject'));
    }

    public function updateGroup(Request $request)
    {
        foreach($request->all() as $key => $value) {
            if (Str::startsWith($key, 'sub_group_')) {
                $id = explode('_', $key)[2];
                $group = Subject::find($id);
                $group->sub_group = $value;
                $group->save();
            }
        }
        return redirect('/dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.list');
    }
    public function job()
    {
        return view('jobapplication');
    }
    public function jobStore()
    {
        $employee=new Employee;
        $employee->first_name=$request->first_name;
        $employee->last_name=$request->last_name;
        $employee->designation=$request->designation;
        $employee->address1=$request->address1;
        $employee->email=$request->email;
        $employee->address2=$request->address2;
        $employee->phonenumber=$request->phonenumber;
        $employee->city=$request->city;
        $employee->gender=$request->gender;
        $employee->state=$request->state;
        $employee->relationship=$request->relationship;
        $employee->dob=$request->dob;
        $employee->sscboard=$request->sscboard;
        $employee->sscpassingyear=$request->sscpassingyear;
        $employee->hscboard=$request->hscboard;
        $employee->hscpassingyear=$request->hscpassingyear;
        $employee->hscpercentage=$request->hscpercentage;
        $employee->bachelorcourcename=$request->bachelorcourcename;
        $employee->bacheloruniversity=$request->bacheloruniversity;
        $employee->bachelorpassingyear=$request->bachelorpassingyear;
        $employee->bachelorpercentage=$request->bachelorpercentage;
        $employee->mastercoursename=$request->mastercoursename;
        $employee->masteruniversity=$request->masteruniversity;
        $employee->masterpassingyear=$request->masterpassingyear;
        $employee->masterpercentage=$request->masterpercentage;

    }
}

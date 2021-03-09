<?php

namespace App\Http\Controllers;

use App\Company;
use App\Department;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    //
    public function Index()
    {
        return view('admin.meeting.index');
    }

    public function CreateMeetingForm()
    {

        $DepartmentDb = Department::where('status',1)->orderBy('id', 'DESC')->get();
        return view('admin.meeting.create',compact('DepartmentDb'));
    }

}

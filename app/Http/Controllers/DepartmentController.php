<?php

namespace App\Http\Controllers;
use App\Company;
use App\Station;
use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function DepartmentList()
    {
        $departments = Department::where('status',1)->where('RegId',auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('admin.department.index',compact('departments'));
    }


    public function AddDepartmentList()
    {
        $Companydb = Company::where('status',1)->where('RegId',auth()->user()->id)->orderBy('id', 'DESC')->get();
        $Stations = Station::where('status',1)->where('RegId',auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('admin.department.create',compact('Companydb','Stations'));
    }


    public function AddDepartmentStore(Request $request)
    {
        $this->validate($request, [
            'CompanyID' => 'required',
            'StationID' => 'required',
            'Name' => 'required'
        ]);
        $department = new Department();
        $department->RegId = auth()->user()->id;
        $department->CompanyID = $request->input('CompanyID');
        $department->StationID = $request->input('StationID');
        $department->Name = $request->input('Name');
        $department->Note = $request->input('Note');
        $department->Initial = $request->input('Initial');
        $department->status = 1;
        $department->HideShow = 1;
        // Token Creating
        $rename = date("ymdhis");
        $shuffle = str_shuffle(md5($rename));
        $StuToken = $shuffle;
        // Token Creating
        $department->token = $StuToken;
        if($department->save())
        {
            return redirect()->back()->with('status','လူကြီးမင်း၏လုပ်ဆောင်မူ့အောင်မြင်ပါသည်');
        }else{
            return 'Something wrong';
        }
    }


    public function DepartmentStatusChange(Request  $In)
    {
        $FindingDepartment = Department::find($In->DepartmentId);
        $FindingDepartment->status = 0;
        if ($FindingDepartment->save())
        {
            return response()->json(['code'=>200,'message'=>'Success']);
        }else{
            return response()->json(['code'=>500,'message'=>'Internal Server Error']);
        }
    }

}

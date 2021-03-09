<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function CheckEmail($IncommingEmail)
    {
        $OutUsers = User::where('email',$IncommingEmail)->get();
        if (count($OutUsers) >= 1){
            return true;
        }else{
            return false;
        }
    }


    public function CharGenerate()
    {
        $UpperCase = chr(rand(65,90));
        $NewCase = chr(rand(65,90));
        $LowerCase = chr(rand(97,122));
        return $UpperCase.'3D'.$NewCase;
    }


    public function UserList()
    {

        $AuthRole = auth()->user()->role;
        $AuthId = auth()->user()->id;
        if ($AuthRole == 1)
        {
            $UserDb = User::where('id','!=',$AuthId)
                ->where('role','>',$AuthRole)
                ->where('status',1)->orderBy('id', 'DESC')->get();
        }else if(($AuthRole == 2 || $AuthRole == 3)) {
            $UserDb = User::where('id','!=',$AuthId)
                ->where('role','>',$AuthRole)
                ->where('parent_id',$AuthId)->orderBy('id', 'DESC')->get();
        }

        $UserRoles = config('app.UserRole');
        $RoleColor = config('app.RoleColor');

        return view('admin.register.index')->with(['Users'=>$UserDb,'UserRoles'=>$UserRoles,'RoleColor'=>$RoleColor]);
    }


    public function UserAddForm()
    {
        $AuthRole = auth()->user()->role;
        $ConfigUserRole = config('app.UserRole');
        $RoleObj = config('app.RoleObj');
        $UserRoles = [];
        foreach ($ConfigUserRole as $Index => $Role)
        {
            $IndexPlus = $Index+1;
            if ( $AuthRole < $IndexPlus )
            {
                array_push($UserRoles,$Role);
            }
        }

        $RoleColor = config('app.RoleColor');
        $RecentUser = User::where('status',1)->where('role','>',$AuthRole)->
        where('parent_id',auth()->user()->id)->orderBy('id', 'DESC')->oldest()->limit(5)->get();

        return view('admin.register.create')->with(['RoleObj'=>$RoleObj,'ConfigUserRole'=>$ConfigUserRole,'UserRoles'=>$UserRoles,'RoleColor'=>$RoleColor,'RecentUser'=>$RecentUser]);

    }


    public function UserCreat(Request $In)
    {
        $Email = $In->Email;
        if ($this->CheckEmail($Email)){
            return 'email_exit';
        }else{

            $UserDb = new User();
            $GetLastRRecord = User::latest('id')->first();
            $LastRcId = empty($GetLastRRecord)?$LastRcId = 1:$LastRcId = $GetLastRRecord->id;
            $NewId = $LastRcId >= 1?$NewId = $LastRcId+1:$NewId = 1;
            // Token Creating
                $rename = date("ymdhis");
                $shuffle = str_shuffle(md5($rename));
                $StuToken = $shuffle;
            // Token Creating
            $CharGenerate = $this->CharGenerate();
            $serial_id = $NewId.$CharGenerate;

            $UserDb->name_id = $serial_id;
            $UserDb->name = $In->Name;
            $UserDb->email = $In->Email;
            $UserDb->phone = $In->Phone;
            $UserDb->password = Hash::make($In->Password);
            $UserDb->parent_id = auth()->user()->id;
            $UserDb->reg_id = auth()->user()->id;
            $UserDb->role = $In->UserRole;
            $UserDb->status = 1;
            $UserDb->token = $StuToken;

            if ($UserDb->save()){
                return response()->json(['code'=>200,'message'=>'Account create successfully']);
            }else{
                return response()->json(['code'=>500,'message'=>'Internal Server Error']);
            }

        }

    }


    public function UserStatusChange(Request  $In)
    {
        $FindingUser = User::find($In->UserId);
        $FindingUser->status = 0;

        if ($FindingUser->save())
        {
            return response()->json(['code'=>200,'message'=>'Success']);
        }else{
            return response()->json(['code'=>500,'message'=>'Internal Server Error']);
        }
    }


    public function UserDisabled(){
        $UserDb = User::where('id','!=',auth()->user()->id)->where('role','>',auth()->user()->role)->where('status',0)->orderBy('id', 'DESC')->get();
        $UserRoles = config('app.UserRole');
        $RoleColor = config('app.RoleColor');
        return view('admin.register.recover')->with(['Users'=>$UserDb,'UserRoles'=>$UserRoles,'RoleColor'=>$RoleColor]);
    }


    public function UserRecover(Request $out){
        $FindingUser = User::find($out->UserId);
        $FindingUser->status = 1;
        if ($FindingUser->save())
        {
            return response()->json(['code'=>200,'message'=>'Success']);
        }else{
            return response()->json(['code'=>500,'message'=>'Internal Server Error']);
        }
    }


    public function DefaultPassword($id){

        $user = User::findOrFail($id);
        $user->password = Hash::make(123456);
        $user->save();
        return redirect()->back()->with('status', 'လူကြီးမင်း၏လုပ်ဆောင်မူ့အောင်မြင်ပါသည်။  Default Passwordမှာ ');

    }


    public function UserEdit($token)
    {

        $user = User::where('token',$token)->first();
        $UserRole = config('app.UserRole');
        return view('admin.register.edit')->with(['User'=>$user,'UserRole'=>$UserRole]);
    }


    public function UpdCheckEmail($Id,$Email)
    {
        $SearchDb = User::where('status',1)->where('email',$Email)->first();
        if (empty($SearchDb)  )
        {
            return true;
        }else{
            if ($SearchDb->id == $Id)
            {
                return true;
            }else{
                return false;
            }
        }
    }


    public function UserUpdate(Request $In)
    {

        $Token = $In->user_token;
        $EditUserDb = User::where('token',$Token)->first();
        $Email = $In->Email;
        if ($this->UpdCheckEmail($EditUserDb->id,$Email))
        {
            $EditUserDb->email = $In->Email;
            $EditUserDb->name = $In->Name;
            $EditUserDb->phone = $In->Phone;
            $EditUserDb->upd_id = auth()->user()->id;
            $EditUserDb->save();
            return redirect('/user/control/')->with('updsuccess', 'လူကြီးမင်း၏အကောင့်ပြင်ဆင်မူ့အောင်မြင်ပါသည်။ ');

        }else{
            return redirect('/user/control/edit/'.$Token)->with('ErrorReturn', ' တူညီသောအိးမေးတွေ့ရှိပါသဖြစ်ပြင်ခွင့်မပြုပါ');
        }

    }



}

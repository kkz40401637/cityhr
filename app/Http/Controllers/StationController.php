<?php

namespace App\Http\Controllers;
use App\Company;
use App\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function StationList()
    {
        $stations = Station::where('status',1)->where('RegId',auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('admin.station.index',compact('stations'));
    }

    public function AddStation(Request $request)
    {

        $CompanyDb = Company::where('status',1)->where('RegId',auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('admin.station.create',compact('CompanyDb'));

    }
    public function store(Request $request)
    {

        // Token Creating
        $Timestemp = date("ymdhis");
        $token = str_shuffle(md5($Timestemp));
        // Token Creating

        $ExtCheck = ['png','jpg','jpeg','gif'];
        $Images =  request()->file('images');

        if (empty($Images)){
            return redirect()->back()->with('error',"ကျေးဇူးပြု ပုံများတင်ပါ ...");
        }else{
            $IncommingExt = $Images->getClientOriginalExtension();

            if (in_array($IncommingExt,$ExtCheck))
            {
                $ImagesPath = public_path('admin-assets/img/station');
                $ImageRename = $token.'.'.$IncommingExt;
                $MoveToServer = $Images->move($ImagesPath,$ImageRename);
                if ($MoveToServer)
                {
                    $stationDb = new Station();
                    $stationDb->CompanyID = $request->CompanyId;
                    $stationDb->StationType = $request->StationType;
                    $stationDb->StationName = $request->StationName;
                    $stationDb->ParentStation = $request->ParentStation;
                    $stationDb->CurrencyUse = $request->CurrencyUse;
                    $stationDb->CurrencySymbol = $request->CurrencySymbol;
                    $stationDb->Address = $request->Address;
                    $stationDb->PhoneNumber = $request->PhoneNumber;
                    $stationDb->FaxNumber = $request->FaxNumber;
                    $stationDb->EmailAddress = $request->EmailAddress;
                    $stationDb->WebSite = $request->WebSite;
                    $stationDb->AdditionalNote = $request->AdditionalNote;
                    $stationDb->images = $ImageRename;
                    $stationDb->status = 1;
                    $stationDb->RegId = auth()->user()->id;
                    $stationDb->hide_show = 1;
                    $stationDb->token = $token;

                    if($stationDb->save())
                    {
                        return redirect()->back()->with('status','လူကြီးမင်း၏လုပ်ဆောင်မူ့အောင်မြင်ပါသည်');
                    }else{
                        return redirect()->back()->with('error',"ဒေတာဘေ့စ် အဲရာ တက်နေပါသည် ...");
                    }

                }else{
                    return redirect()->back()->with('error',"ဆာဗာအဲရာ တက်နေပါသည် ...");
                }
            }else{
                return redirect()->back()->with('error'," png , jpg , jpeg , gif  သာဖြစ်ရမယ်");
            }
        }
    }

    public function StationStatusChange(Request  $In)
    {
        $FindingStation = Station::find($In->StationId);
        $FindingStation->status = 0;

        if ($FindingStation->save())
        {
            return response()->json(['code'=>200,'message'=>'Success']);
        }else{
            return response()->json(['code'=>500,'message'=>'Internal Server Error']);
        }
    }


}

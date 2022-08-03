<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contractorWork;
use App\Models\contractor;
use carbon\carbon;

class contractorWorkController extends Controller
{
    public function contractorWork(){
        $workData = contractorWork::all();
        $contractorsdata = contractor::all();
        return view ('Admin.contractorWork',['contractor_works'=>$workData]);
    }

    public function addWork(){
        $contractorsdata = contractor::all();
        return view ('Admin.addWork',['contractors'=>$contractorsdata]);
    }

    public function addingwork(Request $request){
        $request->validate([
            'CompanyName'=>'required',
            'ShortDescription'=>'required|max:100',
            'LongDescription'=>'required|max:500',
            'Startdate'=>'required',
            'CompletionDate'=>'required',
            'Penaltyrate'=>'required|numeric',
            'line1'=>'required',
            'Line2'=>'required',
            'City'=>'required',
            'State'=>'required',
            'Country'=>'required',
            'typeOfRoadConstructed'=>'required',
            'expiryDate'=>'required'
        ]);
        
        $Startdate = Carbon::parse($request->Startdate)->format('Y-m-d');
        $CompletionDate = Carbon::parse($request->CompletionDate)->format('Y-m-d');
        $expiryDate = Carbon::parse($request->expiryDate)->format('Y-m-d');

        $contractor_works = new contractorWork();
        $contractor_works->CompanyName = $request->CompanyName;
        $contractor_works->ShortDescription = $request->ShortDescription;
        $contractor_works->LongDescription = $request->LongDescription;
        $contractor_works->Startdate = $Startdate;
        $contractor_works->CompletionDate = $CompletionDate;
        $contractor_works->Penaltyrate = $request->Penaltyrate;
        $contractor_works->line1 = $request->line1;
        $contractor_works->Line2 = $request->Line2;
        $contractor_works->City = $request->City;
        $contractor_works->State = $request->State;
        $contractor_works->Country = $request->Country;
        $contractor_works->typeOfRoadConstructed = $request->typeOfRoadConstructed;
        $contractor_works->expiryDate = $expiryDate;
    
        $res = $contractor_works->save();
        
        if($res){
            return back()->with('success','Contractors Work Added Successfully');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function updateWork($id){
        $contractorsdata = contractor::all();   
        $data = contractorWork::find($id);
        return view('Admin.updateWork',['contractor_works'=>$data],['contractors'=>$contractorsdata]);
    }

    public function updatingWork(Request $request){

        $request->validate([
            'CompanyName'=>'required',
            'ShortDescription'=>'required',
            'LongDescription'=>'required',
            'Startdate'=>'required',
            'CompletionDate'=>'required',
            'Penaltyrate'=>'required',
            'line1'=>'required',
            'Line2'=>'required',
            'City'=>'required',
            'State'=>'required',
            'Country'=>'required',
            'typeOfRoadConstructed'=>'required',
            'expiryDate'=>'required'
        ]);

        $Startdate = Carbon::parse($request->Startdate)->format('Y-m-d');
        $CompletionDate = Carbon::parse($request->CompletionDate)->format('Y-m-d');
        $expiryDate = Carbon::parse($request->expiryDate)->format('Y-m-d');

        $contractor_works = contractorWork::find($request->id);
        $contractor_works->CompanyName = $request->CompanyName;
        $contractor_works->ShortDescription = $request->ShortDescription;
        $contractor_works->LongDescription = $request->LongDescription;
        $contractor_works->Startdate = $Startdate;
        $contractor_works->CompletionDate = $CompletionDate;
        $contractor_works->Penaltyrate = $request->Penaltyrate;
        $contractor_works->line1 = $request->line1;
        $contractor_works->Line2 = $request->Line2;
        $contractor_works->City = $request->City;
        $contractor_works->State = $request->State;
        $contractor_works->Country = $request->Country;
        $contractor_works->typeOfRoadConstructed = $request->typeOfRoadConstructed;
        $contractor_works->expiryDate = $expiryDate;

        $res = $contractor_works->save();

        if($res){
            return back()->with('success','Contractors Work Updated Successfully');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function delete($id){
        $contractor_works = contractorWork::find($id);
        $contractor_works->delete();
        return redirect('contractorWork');
    }
}

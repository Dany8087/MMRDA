<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contractor;

class contractorsController extends Controller
{
    public function contractors(){
        $contractorsdata = contractor::all();
        return view('Admin.contractors',['contractors'=>$contractorsdata]);
    }
    public function addcontractor(){
        $contractorsdata = contractor::all();
        return view('Admin.addcontractor');
    }

    public function addingcontractor(Request $request){
        $request->validate([
            'CompanyName'=>'required|regex:/^[a-zA-Z]+$/u|max:255|unique:contractors',
            'Companytype'=>'required',
            'ContactPerson'=>'required',
            'ContactNumber'=>'required|min:10|numeric',
            'Email'=>'required|email|unique:contractors'
        ]);
    
        $contractors = new contractor();
        $contractors->CompanyName = $request->CompanyName;
        $contractors->Companytype = $request->Companytype;
        $contractors->ContactPerson = $request->ContactPerson;
        $contractors->ContactNumber = $request->ContactNumber;
        $contractors->Email = $request->Email;
    
        $res = $contractors->save();
        
        if($res){
            return back()->with('success','Contractor Added Successfully');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
    }


    public function updateContractor($id){
        $contractordata = contractor::find($id);
        return view('Admin.updateContractor',['contractors'=>$contractordata]);
    }

    public function updatingContractor(Request $request){
        $request->validate([
            'CompanyName'=>'required|regex:/^[a-zA-Z]+$/u|max:255',
            'Companytype'=>'required',
            'ContactPerson'=>'required',
            'ContactNumber'=>'required|min:10|numeric',
            'Email'=>'required|email|unique:contractors'
        ]);

        $contractors = contractor::find($request->id);
        $contractors->CompanyName = $request->CompanyName;
        $contractors->Companytype = $request->Companytype;
        $contractors->ContactPerson = $request->ContactPerson;
        $contractors->ContactNumber = $request->ContactNumber;
        $contractors->Email = $request->Email;
    
        $res = $contractors->save();
        
        if($res){
            return back()->with('success','Contractor Updated Successfully');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
    }
}

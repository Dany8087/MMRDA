<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function Dashboard(){
        $result=DB::select(DB::raw('select count(*) as total_work, CompanyName from contractor_works group by CompanyName'));
        $chartData="";
        foreach($result as $list){
            $chartData.="['".$list->CompanyName."', ".$list->total_work."],";
        }
        $chartdetails['chartData']=rtrim($chartData,",");
    
        return view('Admin.dashboard',$chartdetails);
    }
}

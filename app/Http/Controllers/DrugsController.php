<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drugs;

class DrugsController extends Controller
{
    //

    public function drug_trafficking(){
        $drugs= Drugs::all();
        return view ('admin.drug.drug',compact('drugs'));
    }

    public function drug_form(){
        return view('admin.drug.drug_form');
    }

    public function add_drug(Request $request){
        $drugs=new Drugs();

        $drugs->country=$request->input('country');
        $drugs->latitude_degrees=$request->input('latitude_degrees');
        $drugs->latitude_minutes=$request->input('latitude_minutes');
        $drugs->latitude_cardinal=$request->input('latitude_cardinal');
        $drugs->longitude_degrees=$request->input('longitude_degrees');
        $drugs->longitude_minutes=$request->input('longitude_minutes');
        $drugs->longitude_cardinal=$request->input('longitude_cardinal');
        $drugs->date=$request->input('date');
        $drugs->time=$request->input('time');
        $drugs->incident=$request->input('incident');
        $drugs->culprit_vessel=$request->input('culprit_vessel');
        $drugs->vessel_category=$request->input('vessel_category');
        $drugs->total_tonnage=$request->input('total_tonnage');  
        $drugs->drug_type=$request->input('drug_type');   
        
        $drugs->save();
        return redirect('/drug-trafficking');
    }

    public function edit_drug_form($id){
        $drugs= Drugs::find($id);

        return view('admin.drug.edit_drug_form',compact('drugs'));
    }

    public function edit_drug($id,Request $request){
        $drugs=Drugs::find($id);

        $drugs->country=$request->input('country');
        $drugs->latitude_degrees=$request->input('latitude_degrees');
        $drugs->latitude_minutes=$request->input('latitude_minutes');
        $drugs->latitude_cardinal=$request->input('latitude_cardinal');
        $drugs->longitude_degrees=$request->input('longitude_degrees');
        $drugs->longitude_minutes=$request->input('longitude_minutes');
        $drugs->longitude_cardinal=$request->input('longitude_cardinal');
        $drugs->date=$request->input('date');
        $drugs->time=$request->input('time');
        $drugs->incident=$request->input('incident');
        $drugs->culprit_vessel=$request->input('culprit_vessel');
        $drugs->vessel_category=$request->input('vessel_category');
        $drugs->total_tonnage=$request->input('total_tonnage');  
        $drugs->drug_type=$request->input('drug_type');      
        
        $drugs->update();
        return redirect('/drug-trafficking');
    }


    public function view_drug($id){
        $drugs = Drugs::find($id);
        return view('admin.drug.drug_view',compact('drugs'));
    }


    public function delete_drug($id){
        $drugs = Drugs::find($id);
        $drugs->delete();

        return redirect('/drug-trafficking');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IUU;

class IUUsController extends Controller
{
    //
    public function iuu(){
        $iuu= IUU::all();
        return view('admin.iuu.iuu',compact('iuu'));
    }


    public function iuu_form(){
       return view('admin.iuu.iuu_form');
    }

    public function add_iuu(Request $request){
        $iuu= new IUU();

        $iuu->country=$request->input('country');
        $iuu->latitude_degrees=$request->input('latitude_degrees');
        $iuu->latitude_minutes=$request->input('latitude_minutes');
        $iuu->latitude_cardinal=$request->input('latitude_cardinal');
        $iuu->longitude_degrees=$request->input('longitude_degrees');
        $iuu->longitude_minutes=$request->input('longitude_minutes');
        $iuu->longitude_cardinal=$request->input('longitude_cardinal');
        $iuu->date=$request->input('date');
        $iuu->time=$request->input('time');
        $iuu->incident=$request->input('incident');
        $iuu->culprit_vessel=$request->input('culprit_vessel');
        $iuu->incident_type=$request->input('incident_type');

        $iuu->save();
        return redirect('/iuu');
     }

     
     public function edit_iuu_form($id){
        $iuu = IUU::find($id);
        return view('admin.iuu.iuu_edit',compact('iuu'));
     }

     public function edit_iuu($id, Request $request){
        $iuu= IUU::find($id);

        $iuu->country=$request->input('country');
        $iuu->latitude_degrees=$request->input('latitude_degrees');
        $iuu->latitude_minutes=$request->input('latitude_minutes');
        $iuu->latitude_cardinal=$request->input('latitude_cardinal');
        $iuu->longitude_degrees=$request->input('longitude_degrees');
        $iuu->longitude_minutes=$request->input('longitude_minutes');
        $iuu->longitude_cardinal=$request->input('longitude_cardinal');
        $iuu->date=$request->input('date');
        $iuu->time=$request->input('time');
        $iuu->incident=$request->input('incident');
        $iuu->culprit_vessel=$request->input('culprit_vessel');
        $iuu->incident_type=$request->input('incident_type');

        $iuu->update();
        return redirect('/iuu');
     }


     public function view_iuu($id){
        $iuu = IUU::find($id);
        return view ('admin.iuu.iuu_view',compact('iuu'));
     }


     public function delete_iuu($id){
        $iuu= IUU::find($id);
        $iuu->delete();
        return redirect('/iuu');
     }
}

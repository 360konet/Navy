<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piracy;

class PiraciesController extends Controller
{
    //
    public function piracy(){
        $piracies= Piracy::all();
        return view('admin.piracy.piracy',compact('piracies'));
    }

    public function piracy_form(){
        return view('admin.piracy.piracy_form');
    }


    public function add_piracy(Request $request){
        $piracies=new Piracy();

        $piracies->country=$request->input('country');
        $piracies->latitude_degrees=$request->input('latitude_degrees');
        $piracies->latitude_minutes=$request->input('latitude_minutes');
        $piracies->latitude_cardinal=$request->input('latitude_cardinal');
        $piracies->longitude_degrees=$request->input('longitude_degrees');
        $piracies->longitude_minutes=$request->input('longitude_minutes');
        $piracies->longitude_cardinal=$request->input('longitude_cardinal');
        $piracies->date=$request->input('date');
        $piracies->time=$request->input('time');
        $piracies->culprit_vessel=$request->input('culprit_vessel');
        $piracies->victim_vessel=$request->input('victim_vessel');
        $piracies->incident=$request->input('incident');
        $piracies->incident_type=$request->input('incident_type');
        $piracies->other_incident=$request->input('other_incident');

        $piracies->save();

        return redirect('/piracy');
    }


    public function edit_piracy_form($id){
        $piracies= Piracy::find($id);

        return view('admin.piracy.edit_piracy_form',compact('piracies'));
    }

    public function edit_piracy($id, Request $request){
        $piracies = Piracy::find($id);
        
        $piracies->country=$request->input('country');
        $piracies->latitude_degrees=$request->input('latitude_degrees');
        $piracies->latitude_minutes=$request->input('latitude_minutes');
        $piracies->latitude_cardinal=$request->input('latitude_cardinal');
        $piracies->longitude_degrees=$request->input('longitude_degrees');
        $piracies->longitude_minutes=$request->input('longitude_minutes');
        $piracies->longitude_cardinal=$request->input('longitude_cardinal');
        $piracies->date=$request->input('date');
        $piracies->time=$request->input('time');
        $piracies->culprit_vessel=$request->input('culprit_vessel');
        $piracies->victim_vessel=$request->input('victim_vessel');
        $piracies->incident=$request->input('incident');
        $piracies->incident_type=$request->input('incident_type');
        $piracies->other_incident=$request->input('other_incident');

        $piracies->save();

        return redirect('/piracy');
    }


    public function view_piracy($id){
        $piracies = Piracy::find($id);

        return view('admin.piracy.piracy_view',compact('piracies'));
    }


    public function delete_piracy($id){
        $piracies = Piracy::find($id);

        $piracies->delete();
        return redirect('/piracy');
    }
}

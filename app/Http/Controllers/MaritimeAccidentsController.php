<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaritimeAccident;

class MaritimeAccidentsController extends Controller
{
    //
    public function maritime_accident(){
        $maritime= MaritimeAccident::all();
        return view('admin.maritime_accident.maritime_accident',compact('maritime'));
    }

    public function maritime_accident_form(){
        return view('admin.maritime_accident.maritime_accident_form');   
    }

    public function add_maritime_accident(Request $request)
    {
        $maritime = new MaritimeAccident();
    
        $maritime->country = $request->input('country');
        $maritime->latitude_degrees = $request->input('latitude_degrees');
        $maritime->latitude_minutes = $request->input('latitude_minutes');
        $maritime->latitude_cardinal = $request->input('latitude_cardinal');
        $maritime->longitude_degrees = $request->input('longitude_degrees');
        $maritime->longitude_minutes = $request->input('longitude_minutes');
        $maritime->longitude_cardinal = $request->input('longitude_cardinal');
        $maritime->date = $request->input('date');
        $maritime->time = $request->input('time');
        $maritime->incident = $request->input('incident');
        $maritime->accident_category = $request->input('accident_category');
        $maritime->other_accident = $request->input('other_accident');
        $maritime->vessel_involved = implode(',', $request->input('vessel_involved'));
    
        $maritime->save();
    
        return redirect('/maritime-accident');
    }

    public function edit_maritime_accident_form($id){
        $maritime= MaritimeAccident::find($id);

        return view('admin.maritime_accident.edit_maritime_accident',compact('maritime'));
    }


    public function edit_maritime_accident($id,Request $request){
        $maritime= MaritimeAccident::find($id);

        $maritime->country = $request->input('country');
        $maritime->latitude_degrees = $request->input('latitude_degrees');
        $maritime->latitude_minutes = $request->input('latitude_minutes');
        $maritime->latitude_cardinal = $request->input('latitude_cardinal');
        $maritime->longitude_degrees = $request->input('longitude_degrees');
        $maritime->longitude_minutes = $request->input('longitude_minutes');
        $maritime->longitude_cardinal = $request->input('longitude_cardinal');
        $maritime->date = $request->input('date');
        $maritime->time = $request->input('time');
        $maritime->incident = $request->input('incident');
        $maritime->accident_category = $request->input('accident_category');
        $maritime->other_accident = $request->input('other_accident');
        $maritime->vessel_involved = implode(',', $request->input('vessel_involved'));
    
        $maritime->update();
    
        return redirect('/maritime-accident');

    }


    public function view_maritime_accident($id){
        $maritime= MaritimeAccident::find($id);

        return view('admin.maritime_accident.maritime_accident_view',compact('maritime'));
    }


    public function delete_maritime_accident($id){
        $maritime= MaritimeAccident::find($id);
        $maritime->delete();

        return redirect('/maritime-accident');
    }
    

}

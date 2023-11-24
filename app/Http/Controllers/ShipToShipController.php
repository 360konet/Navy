<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShipToShip;

class ShipToShipController extends Controller
{
    //
    public function ship_to_ship(){
        $ships= ShipToShip::all();
        return view('admin.ship_to_ship.ship_to_ship',compact('ships'));
    }

    public function ship_to_ship_form(){
        return view('admin.ship_to_ship.ship_to_ship_form');
    }

    public function add_ship_to_ship(Request $request){
        $ship=new ShipToShip();

        $ship->country=$request->input('country');
        $ship->latitude_degrees=$request->input('latitude_degrees');
        $ship->latitude_minutes=$request->input('latitude_minutes');
        $ship->latitude_cardinal=$request->input('latitude_cardinal');
        $ship->longitude_degrees=$request->input('longitude_degrees');
        $ship->longitude_minutes=$request->input('longitude_minutes');
        $ship->longitude_cardinal=$request->input('longitude_cardinal');
        $ship->date=$request->input('date');
        $ship->time=$request->input('time');
        $ship->incident=$request->input('incident');
        $ship->vessel_type=$request->input('vessel_type');

        $ship->save();

        return redirect('/ship-to-ship');
    }


    public function edit_ship_to_ship_form($id,Request $request){
        $ships= ShipToShip::find($id);

        return view('admin.ship_to_ship.edit_ship_to_ship',compact('ships'));
    }


    public function edit_ship_to_ship($id, Request $request){
        $ships= ShipToShip::find($id);

        $ships->country=$request->input('country');
        $ships->latitude_degrees=$request->input('latitude_degrees');
        $ships->latitude_minutes=$request->input('latitude_minutes');
        $ships->latitude_cardinal=$request->input('latitude_cardinal');
        $ships->longitude_degrees=$request->input('longitude_degrees');
        $ships->longitude_minutes=$request->input('longitude_minutes');
        $ships->longitude_cardinal=$request->input('longitude_cardinal');
        $ships->date=$request->input('date');
        $ships->time=$request->input('time');
        $ships->incident=$request->input('incident');
        $ships->vessel_type=$request->input('vessel_type');

        $ships->save();

        return redirect('/ship-to-ship');

    }


    public function view_ship_to_ship($id){
        $ships= ShipToShip::find($id);

        return view('admin.ship_to_ship.ship_to_ship_view',compact('ships'));
    }


    public function delete_ship_to_ship($id){
        $ship= ShipToShip::find($id);
        $ship->delete();

        return redirect('/ship-to-ship');
    }
}

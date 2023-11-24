<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\illegalMigration;

class IllegalMigrationController extends Controller
{
    //

    public function illegal_migration(){
        $illegal=illegalMigration::all();
        return view('admin.illegal_migration.illegal_migration',compact('illegal'));
    }

    public function illegal_migration_form(){
        return view ('admin.illegal_migration.illegal_migration_form');
    }

    public function add_illegal_migration(Request $request){
        $illegal=new illegalMigration();

        $illegal->country=$request->input('country');
        $illegal->date=$request->input('date');
        $illegal->time=$request->input('time');
        $illegal->incident=$request->input('incident');
        $illegal->incident_category=$request->input('incident_category');
        $illegal->sp_latitude_degrees=$request->input('sp_latitude_degrees');
        $illegal->sp_latitude_minutes=$request->input('sp_latitude_minutes');
        $illegal->sp_latitude_cardinal=$request->input('sp_latitude_cardinal');
        $illegal->sp_longitude_degrees=$request->input('sp_longitude_degrees');
        $illegal->sp_longitude_minutes=$request->input('sp_longitude_minutes');
        $illegal->sp_longitude_cardinal=$request->input('sp_longitude_cardinal');
        $illegal->dp_latitude_degrees=$request->input('dp_latitude_degrees');
        $illegal->dp_latitude_minutes=$request->input('dp_latitude_minutes');
        $illegal->dp_latitude_cardinal=$request->input('dp_latitude_cardinal');
        $illegal->dp_longitude_degrees=$request->input('dp_longitude_degrees');
        $illegal->dp_longitude_minutes=$request->input('dp_longitude_minutes');
        $illegal->dp_longitude_cardinal=$request->input('dp_longitude_cardinal');    
        $illegal->individual_numbers=$request->input('individual_numbers');   
        
        $illegal->save();
        return redirect('/illegal-migration');
    }

    public function edit_illegal_migration_form($id){
        $illegal= illegalMigration::find($id);
        return view ('admin.illegal_migration.edit_illegal_migration_form',compact('illegal'));
    }

    public function edit_illegal_migration(Request $request,$id){
        $illegal= illegalMigration::find($id);

        $illegal->country=$request->input('country');
        $illegal->date=$request->input('date');
        $illegal->time=$request->input('time');
        $illegal->incident=$request->input('incident');
        $illegal->incident_category=$request->input('incident_category');
        $illegal->sp_latitude_degrees=$request->input('sp_latitude_degrees');
        $illegal->sp_latitude_minutes=$request->input('sp_latitude_minutes');
        $illegal->sp_latitude_cardinal=$request->input('sp_latitude_cardinal');
        $illegal->sp_longitude_degrees=$request->input('sp_longitude_degrees');
        $illegal->sp_longitude_minutes=$request->input('sp_longitude_minutes');
        $illegal->sp_longitude_cardinal=$request->input('sp_longitude_cardinal');
        $illegal->dp_latitude_degrees=$request->input('dp_latitude_degrees');
        $illegal->dp_latitude_minutes=$request->input('dp_latitude_minutes');
        $illegal->dp_latitude_cardinal=$request->input('dp_latitude_cardinal');
        $illegal->dp_longitude_degrees=$request->input('dp_longitude_degrees');
        $illegal->dp_longitude_minutes=$request->input('dp_longitude_minutes');
        $illegal->dp_longitude_cardinal=$request->input('dp_longitude_cardinal');    
        $illegal->individual_numbers=$request->input('individual_numbers');   
        
        $illegal->update();
        return redirect('/illegal-migration');
    }

    public function view_illegal_migration($id){
        $illegal= illegalMigration::find($id);
        
        return view('admin.illegal_migration.illegal_migration_view',compact('illegal'));
    }

    public function delete_illegal_migration($id){
        $illegal= illegalMigration::find($id);

        $illegal->delete();
        return redirect('/illegal-migration');
    }
}



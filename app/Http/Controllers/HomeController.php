<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drugs;
use App\Models\illegalMigration;
use App\Models\IUU;
use App\Models\MaritimeAccident;
use App\Models\Piracy;
use App\Models\ShipToShip;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $drugs=Drugs::select('id')->count();
        $illegal_migration=illegalMigration::select('id')->count();
        $iuu= IUU::select('id')->count();
        $maritime_accident= MaritimeAccident::select('id')->count();
        $piracy=Piracy::select('id')->count();
        $ship_to_ship= ShipToShip::select('id')->count();
        $total= $drugs+$illegal_migration+$iuu+$maritime_accident+$piracy+$ship_to_ship;
        return view('home',compact('drugs','illegal_migration','iuu','maritime_accident','piracy','total'));
    }

   
}

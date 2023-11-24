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

class WelcomeController extends Controller
{
    //
    public function getPieChartData()
    {
      $drugs = Drugs::count();
       $illegalMigration = IllegalMigration::count();
       $iuu = IUU::count();
       $maritimeAccident = MaritimeAccident::count();
       $piracy = Piracy::count();
       $shipToShip = ShipToShip::count();
    
       $data = [
           ['label' => 'Drugs', 'value' => $drugs],
           ['label' => 'Illegal Migration', 'value' => $illegalMigration],
           ['label' => 'IUU', 'value' => $iuu],
           ['label' => 'Maritime Accident', 'value' => $maritimeAccident],
           ['label' => 'Piracy', 'value' => $piracy],
           ['label' => 'Ship To Ship', 'value' => $shipToShip],
       ];

     return response()->json($data);
     }


    public function welcome()
    {
        $pieChartData = $this->getPieChartData();
        return view('welcome', compact('pieChartData'));
    }

}

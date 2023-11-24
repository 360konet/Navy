<?php
use App\Models\Drugs;
use App\Models\illegalMigration;
use App\Models\IUU;
use App\Models\MaritimeAccident;
use App\Models\Piracy;
use App\Models\ShipToShip;
use App\Models\User;



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrugsController;
use App\Http\Controllers\IUUsController;
use App\Http\Controllers\IllegalMigrationController;
use App\Http\Controllers\MaritimeAccidentsController;
use App\Http\Controllers\PiraciesController;
use App\Http\Controllers\ShipToShipController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[WelcomeController::class, 'welcome']);

Route::get('/test',function(){
    return view('test');
});

Auth::routes();

//admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Drug tracking
Route::get('/drug-trafficking', [DrugsController::class, 'drug_trafficking']);
Route::get('/drug-form', [DrugsController::class, 'drug_form']);
Route::post('/add-drug', [DrugsController::class, 'add_drug']);
Route::get('/edit-drug-form-{id}', [DrugsController::class, 'edit_drug_form']);
Route::post('/edit-drug-{id}', [DrugsController::class, 'edit_drug']);
Route::get('/view-drug-{id}', [DrugsController::class, 'view_drug']);
Route::get('/delete-drug-{id}', [DrugsController::class, 'delete_drug']);


//IUUs
Route::get('/iuu', [IUUsController::class, 'iuu']);
Route::get('/iuu-form', [IUUsController::class, 'iuu_form']);
Route::post('/add-iuu', [IUUsController::class, 'add_iuu']);
Route::get('/edit-iuu-form-{id}', [IUUsController::class, 'edit_iuu_form']);
Route::post('/edit-iuu-{id}', [IUUsController::class, 'edit_iuu']);
Route::get('/view-iuu-{id}', [IUUsController::class, 'view_iuu']);
Route::get('/delete-iuu-{id}', [IUUsController::class, 'delete_iuu']);


//illegal migrations
Route::get('/illegal-migration', [IllegalMigrationController::class, 'illegal_migration']);
Route::get('/illegal-migration-form', [IllegalMigrationController::class, 'illegal_migration_form']);
Route::post('/add-illegal-migration', [IllegalMigrationController::class, 'add_illegal_migration']);
Route::get('/edit-illegal-migration-form-{id}', [IllegalMigrationController::class, 'edit_illegal_migration_form']);
Route::post('/edit-illegal-migration-{id}', [IllegalMigrationController::class, 'edit_illegal_migration']);
Route::get('/view-illegal-migration-{id}', [IllegalMigrationController::class, 'view_illegal_migration']);
Route::get('/delete-illegal-migration-{id}', [IllegalMigrationController::class, 'delete_illegal_migration']);


//Maritime accidents
Route::get('/maritime-accident', [MaritimeAccidentsController::class, 'maritime_accident']);
Route::get('/maritime-accident-form', [MaritimeAccidentsController::class, 'maritime_accident_form']);
Route::post('/add-maritime-accident', [MaritimeAccidentsController::class, 'add_maritime_accident']);
Route::get('/edit-maritime-accident-form-{id}', [MaritimeAccidentsController::class, 'edit_maritime_accident_form']);
Route::post('/edit-maritime-accident-{id}', [MaritimeAccidentsController::class, 'edit_maritime_accident']);
Route::get('/view-maritime-accident-{id}', [MaritimeAccidentsController::class, 'view_maritime_accident']);
Route::get('/delete-maritime-accident-{id}', [MaritimeAccidentsController::class, 'delete_maritime_accident']);


//Priracies
Route::get('/piracy', [PiraciesController::class, 'piracy']);
Route::get('/piracy-form', [PiraciesController::class, 'piracy_form']);
Route::post('/add-piracy', [PiraciesController::class, 'add_piracy']);
Route::get('/edit-piracy-form-{id}', [PiraciesController::class, 'edit_piracy_form']);
Route::post('/edit-piracy-{id}', [PiraciesController::class, 'edit_piracy']);
Route::get('/view-piracy-{id}', [PiraciesController::class, 'view_piracy']);
Route::get('/delete-piracy-{id}', [PiraciesController::class, 'delete_piracy']);


//Ship to ship
Route::get('/ship-to-ship' , [ShipToShipController::class, 'ship_to_ship']);
Route::get('/ship-to-ship-form' , [ShipToShipController::class, 'ship_to_ship_form']);
Route::post('/add-ship-to-ship' , [ShipToShipController::class, 'add_ship_to_ship']);
Route::get('/edit-ship-to-ship-form-{id}' , [ShipToShipController::class, 'edit_ship_to_ship_form']);
Route::post('/edit-ship-to-ship-{id}' , [ShipToShipController::class, 'edit_ship_to_ship']);
Route::get('/view-ship-to-ship-{id}' , [ShipToShipController::class, 'view_ship_to_ship']);
Route::get('/delete-ship-to-ship-{id}' , [ShipToShipController::class, 'delete_ship_to_ship']);


//Users
Route::get('/users' , [UsersController::class, 'user']);
Route::post('/add-user' , [UsersController::class, 'add_user']);
Route::get('/remove-user-{id}' , [UsersController::class, 'remove_user']);


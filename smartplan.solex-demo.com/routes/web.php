<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

//Route::view('/','welcome');

use Illuminate\Http\Request;

function getUnitsAvailability($buildingNumber){
    $units = App\Unit::all()->where('buildingCode', $buildingNumber);

    $available = 0 ;
    $unavailable = 0 ;
    $total = count($units);
    foreach  ( $units as $unit ){
        if ($unit->status === 'Res'){
            $unavailable ++ ;
        }
        elseif ($unit->status === 'Avail') {
            $available ++ ;
        }
    }
    return array( $available , $unavailable , $total ) ;
}
Route::get('/' ,function (Request $request) {
    // $buildings = App\Building::all();
	$buildings = DB::table('building')->select('building.*');	
	if ( $request->has('phase') ){
		if (!empty($request->input('buildingCode'))){
    $buildings = $buildings->where('building.buildingCode' , '=' , $request->input('buildingCode') );
		}
		if (!empty($request->input('zone'))){
    $buildings = $buildings->where('building.zone' , '=' , $request->input('zone') );
		}
		if (!empty($request->input('type'))){
    $buildings = $buildings->where('building.type' , '=' , $request->input('type') );
		}
		if (!empty($request->input('phase'))){
    $buildings = $buildings->join('project' , 'building.projectCode' , 'project.projectCode')->where('project.phase' , '=' , $request->input('phase') );
		}
		if (!empty($request->input('sizeFrom')) || !empty($request->input('sizeTo')) || !empty($request->input('priceFrom')) || !empty($request->input('sizeTo')) ){
			$buildings = $buildings->join('unit' , 'building.buildingCode' , 'unit.buildingCode');
		}
		if (!empty($request->input('sizeFrom'))){
    $buildings = $buildings->where('unit.size' , '>=' , $request->input('sizeFrom') );
		}
		if (!empty($request->input('sizeTo'))){
    $buildings = $buildings->where('unit.size' , '<=' , $request->input('sizeTo') );
		}
		if (!empty($request->input('priceFrom'))){
    $buildings = $buildings->where('unit.priceAmount' , '>=' , $request->input('priceFrom') );
		}
		if (!empty($request->input('priceTo'))){
    $buildings = $buildings->where('unit.priceAmount' , '<=' , $request->input('priceTo') );
		}
		
	}
	$buildings = $buildings->distinct('buildingCode')->get();
	

    $status = [];
    
    foreach($buildings as $building){
        $availabilities = getUnitsAvailability($building->buildingCode);
        // array_push($status , [ buildingCode=> ( $availabilities[0] > 0 ? 'Available' : 'Reserved') ]);
        $status[$building->buildingCode] = ($availabilities[0] > 0 ? 'Available' : 'Reserved');
    }
    $status_json = json_encode($status);
    return view('compound')->with(compact('status_json'));
})->name("compound");

Route::get('/com' ,function () {
    return view('compound1');
})->name("compound1");

Route::get('/search' ,function () {
	$phases = DB::table('project')->select('phase')->distinct()->get();
	$zones = DB::table('building')->select('zone')->distinct()->get();
	$buildings = DB::table('building')->select('buildingCode')->distinct()->get();
	$types = DB::table('building')->select('type')->distinct()->get();
    return view('search')->with(compact('phases' , 'zones' , 'buildings' , 'types'));
})->name("search");

Route::get('/unit_details/{unitNumber}' ,function ($unitNumber) {
    $unit = DB::table('unit')->where('unitNumber' , '=' , $unitNumber)->get();
    
    return view('unit')->with(compact('unit'));
})->name("unit");

Route::get('/building_details/{buildingCode}' ,function ($buildingCode) {
    $building = DB::table('building')->where('buildingCode' , '=' , $buildingCode)->get();
    $availabilities = getUnitsAvailability($buildingCode);
    $avail = ['available'=>$availabilities[0],'unavailable'=>$availabilities[1] , 'total_units'=>$availabilities[2]
    , 'status' => ($availabilities[0] > 0 ? 'Available' : 'Reserved') ] ;

    $mergedBuilding = array_merge($building->toArray(), $avail);
    return view('building')->with(compact('mergedBuilding'));
})->name("building");

Route::get('/available_units/{buildingCode}' ,function ($buildingCode) {
    $units = DB::table('unit')->where('buildingCode' , '=' , $buildingCode)->where('status' , '=' , 'Avail')->get();
    return view('available_units')->with(compact('units'));
})->name("available_units");


// Route::get('/getUnit/{unitNumber}' , 'HomeController@getUnit')->name("getUnit");

Route::get('/getUnit/{unitNumber}' ,function ($unitNumber) {
    $unit = App\Unit::find($unitNumber);
    // $unit = App\Unit::where('unitNumber', '=', $unitNumber)->first();
    return $unit;
})->name("getUnit");


Route::get('/getBuilding/{buildingNumber}' ,function ($buildingNumber) {
    $building = App\Building::find($buildingNumber);
    // $building = App\Building::where('buildingCode', '=', $buildingNumber)->first();
    // $units = App\Unit::all()->where('buildingCode', $buildingNumber);
    // $available = 0 ;
    // $unavailable = 0 ;
    // $total = count($units);
    // foreach  ( $units as $unit ){
    //     if ($unit->status === 'Res'){
    //         $unavailable ++ ;
    //     }
    //     elseif ($unit->status === 'Avail') {
    //         $available ++ ;
    //     }
    // }
    $availabilities = getUnitsAvailability($buildingNumber);
    $avail = ['available'=>$availabilities[0],'unavailable'=>$availabilities[1] , 'total_units'=>$availabilities[2]] ;

    $mergedBuilding = array_merge($building->toArray(), $avail);

    // return $mergedBuilding;
    return response()->json($mergedBuilding);
    
})->name("getBuilding");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

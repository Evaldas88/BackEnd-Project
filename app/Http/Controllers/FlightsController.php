<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Flights;
use App\Models\Passenger;
use App\Models\Post;
use Illuminate\Http\Request;
class FlightsController extends Controller
{
 
    public function index()
    {
        return Flights::all();
    }


    public function store(Request $request)
    {
        $destination = Flights::create([
            'Destination' => $request->Destination,
            'Airlines' => $request->Airlines,

        ]);
        if($destination){
            return response()->json(["status" => 200]);
        }
    }


    public function show($id)
    {

        $flight = Flights::where('id', $id);

        if ($flight->get())
            return response()->json([
                'success' => true,
                'message' => $flight->get()
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'Nepavyko rasti  '
            ], 500);
    }


  

    public function update(Request $request, $id)
    {
        $flight = Flights::find($id);
        $flight->fill($request->all());
        if($flight -> save()){
            return response()->json(["status" => 200]);
        }

    }

    public function destroy($id){

        return ( Flights::destroy($id) == 1) ?
            response()->json(['success' => 'success'], 204) :
            response()->json(['error' => 'delete not successful'], 500);

}
}

<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Flights;
use App\Models\Passenger;
use App\Models\Post;
use Illuminate\Http\Request;
class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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


    public function show($id, Request $request)
    {

        $flight = Passenger::where('id', $id);

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


    public function edit($id, Request $request) {
        Passenger::find($id)->update($request->all());
        return 'Post successfully updated.';
    }


    public function update(Request $request, $id )
    {
        $passenger = Flights::find($id);
        $passenger->fill($request->all());

        if($passenger -> save()){
            return response()->json(["status" => 200]);
        }

    }

    public function destroy($id){

        return (\App\Models\Flights::destroy($id) == 1) ?
            response()->json(['success' => 'success'], 204) :
            response()->json(['error' => 'delete not successful'], 500);

}
}

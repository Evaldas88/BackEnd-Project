<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $passenger = DB::table('Passengers')
        // ->join('Flights', 'flights_id', '=', 'Passengers.Flights_id' )
        // ->select('Passengers.*', 'Flights.Destination')
        // ->get();
        // return $passenger;
        return Passenger::all();
    }

    public function store(Request $request)
    {
        error_log($request);

        $newCustomer =  Passenger::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'flight_id'=> $request->id,

        ]);
        if($newCustomer){
            return response()->json(["status" => 200]);
        }
    }

    public function show($id, Request $request)
    {

        $passenger = Passenger::where('id', $id);

        if ($passenger->get())
            return response()->json([
                'success' => true,
                'message' => $passenger->get()
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'Nothing to find'
            ], 500);
    }

    public function update(Request $request, $id)
    {



        $passenger = Passenger::find($id);
        $passenger->fill($request->all());
        // $passenger->name = $request->name;
        // $passenger->surname = $request->surname;
        // $passenger->flight_id = $request->'id';
        if($passenger -> save()){
            return response()->json(["status" => 200]);
        }

    }

    public function destroy($id){

            return (Passenger::destroy($id) == 1) ?
                response()->json(['success' => 'success'], 204) :
                response()->json(['error' => 'delete not successful'], 500);

}


}

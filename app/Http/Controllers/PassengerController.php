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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create(Request $request) {
    //     Passenger::create($request->all());
    //     return 'Post successfully created.';
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCustomer = \App\Models\Passenger::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'flight_id'=> $request->id,
          
        ]);
        if($newCustomer){
            return response()->json(["status" => 200]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
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
                'message' => 'Nepavyko rasti  '
            ], 500);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
     

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $passenger = Passenger::find($id);
        $passenger->name = $request->input('name');
        $passenger->surname = $request-> input('surname') ;
        $passenger->flight_id = $request->input('id');
        if($passenger -> save()){
            return response()->json(["status" => 200]);
        }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
          
            return (\App\Models\Passenger::destroy($id) == 1) ?
                response()->json(['success' => 'success'], 204) :
                response()->json(['error' => 'delete not successful'], 500);
        
}
    

}
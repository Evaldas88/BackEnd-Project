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
     *   

     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $destination = \App\Models\Flights::create([
            'Destination' => $request->Destination,
            'Airlines' => $request->Airlines,
          
        ]);
        if($destination){
            return response()->json(["status" => 200]);
        }
    }

    /**
     * Display the specified resource
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request) {
        Passenger::find($id)->update($request->all());
        return 'Post successfully updated.';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update( )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
          
        return (\App\Models\Flights::destroy($id) == 1) ?
            response()->json(['success' => 'success'], 204) :
            response()->json(['error' => 'delete not successful'], 500);
    
}
}

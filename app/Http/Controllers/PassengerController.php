<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassengerController extends Controller
{

    public function index()
    {

        return Passenger::all();
    }

    public function store(Request $request)
    {
   
        $newCustomer =  Passenger::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'flight_id' => $request->id,

        ]);
        if ($newCustomer) {
            return 'Passenger successfully created';
                }
    }

    public function show($id)
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

        if ($passenger->save()) {
            return 'Passenger successfully Updated';
        }
    }

    public function destroy($id)
    {

        return Passenger::destroy($id);
     
    }
}

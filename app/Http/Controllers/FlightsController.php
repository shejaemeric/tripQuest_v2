<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function searchFlights(Request $request){
        $validator = Validator::make($request->all(),[
            'origin' => 'required|string|max:191',
            'destination' =>'required|string|max:191',
            'depart_date' =>'required|string|max:191',
        ]);
        try {
            $response = Http::withHeaders([
                'X-Access-Token' => '516389f25177dff5379cd20f6832cf05',
                'X-RapidAPI-Key' => '291956e6a0msh45c40c5ab4a881ep1bea65jsn220317b787e4',
                'X-RapidAPI-Host' => 'travelpayouts-travelpayouts-flight-data-v1.p.rapidapi.com'
            ])->get('https://travelpayouts-travelpayouts-flight-data-v1.p.rapidapi.com/v1/prices/calendar', [
                'origin'=>$request->origin,
                'destination'=>$request->destination,
                'depart_date'=>$request->depart_date,
                'currency'=> "RWF",
                'calendar_type'=> "departure_date",
            ]);

            return response()->json([
                "status" => 200,
                "flights" => $response->json(),
            ], 200);
        } catch (\Exception $ex) {
            return response()->json([
                "status" => 400,
                "messages" => "An Error Has Occured",
            ], 400);
        }

    }
    public function saveFlights(){
        return response()->json([
            "status"=> 200,
            "User"=> "",
        ],200);
    }
    public function unsaveFlights(){
        return response()->json([
            "status"=> 200,
            "User"=> "",
        ],200);
    }
    public function getSavedFlights(){
        return response()->json([
            "status"=> 200,
            "User"=> "",
        ],200);
    }
}

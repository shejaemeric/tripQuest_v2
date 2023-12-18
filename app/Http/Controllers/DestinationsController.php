<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
require_once 'CountryData.php';
use Illuminate\Support\Facades\Http;
use countriesData\CountryData;


class DestinationsController extends Controller
{
    public function getTopDestinations(){
        // $countryData = new CountryData();
        // $data = $countryData::$topDestinations;
        // return view("destinations.displayTop",compact("data"));
        return view("userDashboard");
    }

    public function getOneDestination($country)
    {
        try {
            $response = Http::withHeaders([
                'X-RapidAPI-Key' => '291956e6a0msh45c40c5ab4a881ep1bea65jsn220317b787e4',
                'X-RapidAPI-Host' => 'travel-info-api.p.rapidapi.com'
            ])->get('https://travel-info-api.p.rapidapi.com/country-details', [
                'country' => $country
            ]);

            $countryData = new CountryData();
            $allCountryData = $countryData::$allCountryData;

            $data =  array_merge($allCountryData[$country], $response->json());
            return view("destinations.displayOneCountry",compact("data"));
        } catch (\Exception $ex) {
            $data = $allCountryData[$country];
            return view("destinations.displayOneCountry",compact("data"));

        }
    }


    public function saveDestination($country){

        return response()->json([
            "status"=> 200,
            "User"=> "",
        ],200);
    }
    public function unsaveDestination(){
        return response()->json([
            "status"=> 200,
            "User"=> "",
        ],200);
    }

    public function getSavedDestination(){
        {
            return response()->json([
                "status"=> 200,
                "User"=> "",
            ],200);
        }
    }
}

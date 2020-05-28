<?php

namespace App\Http\Controllers\Flights;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function search()
    {
        return view('flights.index');
    }

    public function index(Request $request)
    {
        $data = Http::post('https://api.flyallover.com/api/search',
            [
              'trip_type' => 'OneWay',
                'origin' => $request['from'],
                'destination' => $request['to'],
                'departure_date' => $request['departing'],
                'return_date' => $request['returning'],
                'travellers' => $request['travellers'],
                'adult' => 1,
                'youth' => 1,
                'senior' => 0,
                'child' => 0,
                'lap' => 0,
                'seat' => 0,
                'class' => $request['class']
            ]
        );

        $response = $data->getBody();
        $flights = json_decode($response,true);
        //$flights_details= $flights['data']['Itineraries'][0]['flights'][0][0]['FlightNumber'];
        
        $results = $flights['data']['Itineraries'];
        return view('flights.details',compact('results'));
            
    
        
    }
}

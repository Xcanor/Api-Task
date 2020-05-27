<?php

namespace App\Http\Controllers\Flights;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;

class HomeController extends Controller
{
    public function search()
    {
        return view('flights.index');
    }
    public function index(Request $request)
    {
        $client = new Client();
        $data = $client->request('POST','https://api.flyallover.com/api/search',
        [
            'form_params' => [
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
        ]
        );
        $response = $data->getBody();
        $flights = json_decode($response,true);
        //$flights_details= $flights['data']['Itineraries'][0]['flights'][0][0]['FlightNumber'];
        foreach($flights['data']['Itineraries'] as $itineraries)
        {   
            foreach($itineraries['flights'] as $flights_details)
            {
                $results = $flights_details; 
                return view('flights.details',compact('results'));
            }
        }
        
    }
}

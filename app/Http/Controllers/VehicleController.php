<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;

class VehicleController extends Controller
{
    public function index()
    {
        $response = Http::get(env('API_BASE_URL').'/vehicle/');

        $vehicles = $response->object();
        //dd($rentals);

        /**/
        return view('formulaireReservation',[
            'vehicles'=>$vehicles
        ]);
    }
}

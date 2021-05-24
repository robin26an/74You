<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class AgencyController extends Controller
{
    public function index()
    {
       $response = Http::get(env('API_BASE_URL').'/agency/');

       $agencies = $response->object();
       //dd($rentals);

/**/
        return view('formulaireReservation',[
            'agencies'=>$agencies
        ]);
    }

}

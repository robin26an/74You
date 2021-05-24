<?php


namespace App\Http\Controllers;

use http\Message\Body;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RentalController extends Controller
{
    public function index()
    {
       $response = Http::get(env('API_BASE_URL').'/rental/');
        //dd($response);
       $rentals = $response->object();
       //dd($rentals);

/**/
        return view('tableauDeBord',[
            'rentals'=>$rentals
        ]);
    }
}

<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{
    public function profil()
    {
       $response = Http::get(env('API_BASE_URL').'/customer/');



        $customers = $response->object();
        //dd($rentals);

        /**/
        return view('profil',[
            'customers'=>$customers]);
    }

}

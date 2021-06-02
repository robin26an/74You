<?php


namespace App\Http\Controllers;

use http\Message\Body;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServiceController extends Controller
{
    public function service()
    {
        $response = Http::get(env('API_BASE_URL').'/service');
        //dd($response);
        $services = $response->object();
        //dd($services);

        /**/
        return view('service',[
            'services'=>$services
        ]);
    }
}

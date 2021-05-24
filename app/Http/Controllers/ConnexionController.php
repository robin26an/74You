<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConnexionController extends Controller
{
function userLogin(Request $req)
{
    //dd($req);
$http = Http::post(env('API_BASE_URL') . '/auth/login',$req->all());

if ($http->status() == 401){
return view('login');
}
//dd($http);
session(['email' => $http->object()->email]);
session(['id' => $http->object()->id]);

return redirect()->route('tableauDeBord');
}

public function index()
{
return view('login');
}

public function logout()
{
    $http=Http::get(env('API_BASE_URL') . '/auth/logout');
session()->pull('email');
session()->pull('id');

return redirect()->route('login');
}

}

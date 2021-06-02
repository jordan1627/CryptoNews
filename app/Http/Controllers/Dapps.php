<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Dapps extends Controller
{
    public function index()
    {
    

        $Crypto = Http::withHeaders(['x-access-token' => ' 53a0b0a7e4f2fa59519e4'
       
    ])->get('https://api.coinranking.com/v2/dapps')
      ->json()['data']['dapps'];

      //dump($Crypto);



     return view('Dapps', [
        'Crypto' => $Crypto,
       ]);
     }
}

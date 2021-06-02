<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class exchangemarket extends Controller
{
    public function index()
    {
    

        $Crypto = Http::withHeaders(['x-access-token' => 'coinranking800abf1bbe71f9a3ce381ff4a4d2ba4'
       
    ])->get('https://api.coinranking.com/v2/exchange/-zdvbieRdZ/markets')
      ->json()['data']['markets'];

     // dump($Crypto);



     return view('exchangemarket', [
        'Crypto' => $Crypto,
       ]);
     }
}

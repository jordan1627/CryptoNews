<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class latestlisting extends Controller
{
    public function index()
    {
    



    $Crypto = Http::withHeaders(['X-CMC_PRO_API_KEY' => 'dbaa840d-dc01-4dba-8a64-c6b0ce9b18de'
       
     ])->get('https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest')
       ->json()['data'];

      //dump($Crypto);




    
       return view('listing', [
        'Crypto' => $Crypto,
     
          
       ]);

       }

 


  
}

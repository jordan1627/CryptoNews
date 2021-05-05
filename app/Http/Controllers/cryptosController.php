<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class cryptosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
  {

    $popularNews = Http::withToken('services.tmdb.token')
    ->get('https://cryptonews-api.com/api/v1/category?section=general&items=12&token=sp3yxry8zaggyiojy22s49tn6jqs16rnbjvoanac')
     ->json()['data'];

     //dump($popularNews);



     $latestNews = Http::withToken('services.tmdb.token')
     ->get('https://cryptonews-api.com/api/v1?tickers=BTC,ETH,XRP&items=50&token=sp3yxry8zaggyiojy22s49tn6jqs16rnbjvoanac')
      ->json()['data'];
      
      //dump($latestNews);
    return view('index', [
        'popularNews' => $popularNews,
        'latestNews' =>  $latestNews,
       

    ]);

  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

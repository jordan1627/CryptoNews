<?php

namespace App\Http\Livewire;

use Livewire\Component;
use illuminate\support\Facades\http;

class SearchDropdown extends Component
{
    public $search = '';
    public $searchResults = [];


    public function render()
    {



        $this->searchResults =  $popularNews = Http::withToken('services.tmdb.token')
        ->get('https://cryptonews-api.com/api/v1/category?section=general&items=12&token=sp3yxry8zaggyiojy22s49tn6jqs16rnbjvoanac')
         ->json()['data'];
    
        // dump($popularNews);
    
        return view('livewire.search-dropdown');
    }
}

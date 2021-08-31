<?php

namespace App\View\Components;


use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;


class Table extends Component
{

    public $allData;
    
    public function __construct($allData)
    {
        $this->allData = $allData;
    }

    // public function Reading ()
    // {
        // $response = Http::get('http://localhost/Api_Json_data/stock_market_data.json');
        
        // $all_data = $response->json();
        

        // return $all_data;
    // }

    public function render()
    {
        return view('components.table');
    }
}

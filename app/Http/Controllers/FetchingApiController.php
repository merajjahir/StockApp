<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class FetchingApiController extends Controller
{
    public function Reading (Request $request)
    {
        $response = Http::get('http://localhost/Api_Json_data/stock_market_data.json');
        
        $all_data = $response->object();
        $all_data = $all_data;
        
        $data =$all_data;
        
        $result = [];
        if(!empty($data))
        {
            foreach ($data as $key => $value) 
            {
                $result[][] = $value;
            }
        }
        
        
        $paginate = 10;
        $page = $request->input('page', 1);

        
        $offSet = ($page * $paginate) - $paginate;  
        $itemsForCurrentPage = array_slice($result, $offSet, $paginate, true);  
        $result = new \Illuminate\Pagination\LengthAwarePaginator($itemsForCurrentPage, count($result), $paginate, $page);
        $result = $result->toArray();
        return view('welcome',['all_data' => $result]);
    }
    
   
    

   
}

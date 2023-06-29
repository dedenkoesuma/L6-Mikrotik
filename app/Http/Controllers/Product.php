<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function index(){ 
        $url = "https://mikrotik.startxindonesia.co.id/api/v1/product";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);

        $products = json_decode($response, true);
        $params = [
            'products'=>$products['response']['data'],
            'title' => 'Product'
        ];
        return view('product/index', $params);
    }
}

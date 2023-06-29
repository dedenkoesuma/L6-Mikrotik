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
        public function detail() {
        $url = "https://mikrotik.startxindonesia.co.id/api/v1/product/detail?type=parameter&param=". $_GET['parameter'];
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);

        $productDetail = json_decode($response, true);
        $params = [
            'detail'=> $productDetail['response']['data'],
            'title' => 'Detail'
        ];
        return view('product/detail', $params,dd($productDetail));
    }
}

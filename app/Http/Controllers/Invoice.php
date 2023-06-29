<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Invoice extends Controller
{

    public function index(){
        $url = "https://mikrotik.startxindonesia.co.id/api/v1/invoice?filter[period]=2023-06";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
        $response = curl_exec($curl);
        curl_close($curl);
    
        $invoices = json_decode($response, true); 
        $params = [
            "invoices" => $invoices['response']['data'],
            'title' => 'Invoice'
        ];
        return view('invoice/index',$params);
    }
    public function detail() {
        $url = "https://mikrotik.startxindonesia.co.id/api/v1/invoice/detail?type=parameter&param=".$_GET['parameter'];
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);

        $invoicesDetail = json_decode($response, true);

        $params = [
            'detail' => $invoicesDetail['response']['data'],
            'title' => 'Detail'
        ];
        return view('invoice/detail', $params);
    }
}

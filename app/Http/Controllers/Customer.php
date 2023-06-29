<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Customer extends Controller
{
    public function index() {
        $url = "https://mikrotik.startxindonesia.co.id/api/v1/customer?include=subscription";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);

        $Customers = json_decode($response, true);
        $params = [
            'customers'=> $Customers['response']['data'],
            'title' => 'Customer'
        ];
        return view('customer/index', $params);
    }
}

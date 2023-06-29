<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Detail extends Controller
{
    public function invoice() {
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
    public function product() {
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
    public function customer() {
        $url = "https://mikrotik.startxindonesia.co.id/api/v1/customer/detail?type=parameter&param=".$_GET['parameter']."&include=subscription";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);

        $customerDetail = json_decode($response, true);
        $params = [
            'details'=> $customerDetail['response']['data']['subscription']['data'],
            'title' => 'Detail'
        ];
        return view('customer/detail',$params);
    }
}

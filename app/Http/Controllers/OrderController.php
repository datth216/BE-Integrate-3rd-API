<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class OrderController extends Controller
{
    public function index(Request $request){        
      $client = new \GuzzleHttp\Client();

      $response = $client->request('POST', 'https://integration.api.scalapay.com/v2/orders', [
        'body' => '{"totalAmount":{"currency":"EUR","amount":"190.00"},"consumer":{"givenNames":"Joe","phoneNumber":"0400000001","surname":"Consumer","email":"test@scalapay.com"},"shipping":{"phoneNumber":"0400000000","countryCode":"IT","name":"Joe Consumer","postcode":"50056","suburb":"Montelupo Fiorentino","line1":"Via della Rosa, 58"},"merchant":{"redirectCancelUrl":"https://portal.integration.scalapay.com/failure-url","redirectConfirmUrl":"https://portal.integration.scalapay.com/success-url"},"type":"online","product":"pay-in-3","frequency":{"number":1,"frequencyType":"monthly"},"orderExpiryMilliseconds":600000,"items":[{"price":{"currency":"EUR","amount":"10.00"},"quantity":1,"gtin":"123458791330","name":"T-Shirt","category":"clothes","subcategory":["shirt","short"],"sku":"12341234","pageUrl":"https://www.scalapay.com//product/view/","imageUrl":"https://www.scalapay.com//product/view/"}]}',
        'headers' => [
          'Authorization' => 'Bearer qhtfs87hjnc12kkos',
          'accept' => 'application/json',
          'content-type' => 'application/json',
        ],
      ]);
        return $response->getBody();
                
        return view('index');
    }
}

<?php

namespace App\Http\Services;

use GuzzleHttp\Client; //call to external end point
use GuzzleHttp\Psr7\Request;

class FatoorahServices
{

    private $base_url;
    private $headers;
    private $request_client;

    public function __construct(Client $request_client)
    {
        $this->request_client = $request_client;
        $this->base_url = env('fatoora_base_url'); // to call myfatoorah
        $this->headers = [
            'Content-Type' => 'application/json',
            'authorization' => 'Bearer' . env('fatoorah_token')
        ]; // to call any external server you need Guzzle or Http or Curl
    }

    public function buildRequest($url, $method, $data = [])
    {
        $request = new Request($method, $this->base_url . $url, $this->headers);
        if (!$data)
            return false;
        $response = $this->request_client->send($request, [
            'json' => $data
        ]);

        if ($response->getStatusCode() != 200) {
            return false;
        }
        $response = json_encode($response->getBody(), true);

        return $response;
    }



    public function sendPayment($data)
    {
        // dd($data);
        // $requestData = $this->parsePaymentData();

        return  $response = $this->buildRequest('/v2/SendPayment', 'POST', $data);

        // if($response){
        //     $this->saveTransactionPayment($patient_id , $response['Data']['InvoiceId']);
        // }
        // return $response ;
    }

    public function getPaymentStatus($data)
    {
        return $response = $this->buildRequest('v2/getPaymentStatus', 'POST', $data);
    }
}

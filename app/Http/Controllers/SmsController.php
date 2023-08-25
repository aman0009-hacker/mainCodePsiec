<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SmsController extends Controller
{
    public function sendSms()
    {
        
        $url = 'https://msdgweb.mgov.gov.in/esms/sendsmsrequestDLT';
        
        $response = Http::post($url, [
            'DEFAULT_SENDER' => '1',
            'HTTP_METHOD' => '1',
            'USERNAME' => 'dogrpunjab-psiec',
            'PASSWORD' => 'Psiec@12345',
            'SENDERID' => 'PBGOVT',
            'API_TYPE' => 'P',
            'ORG_ID' => '1',
            'SECUREKEY' => 'aaf19f34-e8e5-4ffd-b609-703615bc8c7e',
            // Add other parameters as needed
        ]);

        return $response->body();
    }

}

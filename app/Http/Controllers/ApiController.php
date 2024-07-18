<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class ApiController
{
    function verify_id(Request $request)
    {
        $id = $request['input'];

        //Http Client to hit the api
        // $response = Http::post('http://192.168.0.180/Customer/KRA/ValidatePinById/1.0', [
        //     'id' => $request['input'],
        // ]);

        //return the first 4 characters of the id
        $otp = substr($id, 0, 4);

        //create an array to return
        $response = json_encode([
            'status' => 'success',
            'otp' => $otp
        ]);

        return $response;
    }


    //http://192.168.0.180/BusinessDomains/000_COMMON/Services/CommonEmail/1.2/send
    function sendEmail(Request $request)
    {
        $email = $request['email'];
        $message = $request['message'];

        //Http Client to hit the api
        // $response = Http::post('http://192.168.0.180/BusinessDomains/000_COMMON/Services/CommonEmail/1.2/send')

        $response = 423;

        return response()->json($response);
    }

    function sendSms(Request $request)
    {
        $phone = $request['phone'];

        $response = 423;

        return response()->json($response);
    }

    // https://192.168.0.180:4431/Payments/C2B/STKPush/1.0
    function initiateMpesaExpress(Request $request)
    {
        $phone = $request['phone'];
        $amount = $request['amount'];

        //Http Client to hit the api
        // $response = Http::post('https:///192.168.0.180:4431/Payments/C2B/STKPush/1.0')

        $response = json_encode([
            'status' => 'success',
        ]);

        return $response;
    }
}

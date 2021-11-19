<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class PayPalPaymentController extends Controller
{

    public function handlePayment()

    {
        $provider = new PayPalClient([]);
        $res=$provider->createOrder([
            "intent"=> "CAPTURE",
            "purchase_units"=> [
                0 => [
                    "amount"=> [
                        "currency_code"=> "USD",
                        "value"=> "100.00"
                    ]
                ]
            ]
        ]);
        dd($res);

        return redirect($res["paypal_link"]);

    }


    public function paymentCancel()

    {

        dd("Your payment has been declend. The payment cancelation page goes here!");

    }


    public function paymentSuccess(Request $request)

    {

//        $provider = \PayPal::setProvider();
//        $paypalModule = new ExpressCheckout;
//
//        $response = $paypalModule->getExpressCheckoutDetails($request->token);
//
//        dd($response);
//
//        if (in_array(strtoupper($response["ACK"]), ["SUCCESS", "SUCCESSWITHWARNING"])) {
//
//            dd("Payment was successfull. The payment success page goes here!");
//
//        }


        dd("Error occured!");

    }

}

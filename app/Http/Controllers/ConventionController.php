<?php

namespace App\Http\Controllers;

use App\Convention;
use Illuminate\Http\Request;
use App\User;
use App\Payment;
use Illuminate\Support\Facades\Hash;

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

class ConventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    public function chargeCreditCard(Request $request)
    {
        if($request->membership=="Yes"){
        
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }

        // Common setup for API credentials
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName(config('services.authorize.login'));
        $merchantAuthentication->setTransactionKey(config('services.authorize.key'));
        $refId = 'ref'.time();
        // Create the payment data for a credit card
          $creditCard = new AnetAPI\CreditCardType();
          $creditCard->setCardNumber($request->cnumber);
          // $creditCard->setExpirationDate( "2038-12");
          $expiry = $request->card_expiry_year . '-' . $request->card_expiry_month;
          $creditCard->setExpirationDate($expiry);
          $paymentOne = new AnetAPI\PaymentType();
          $paymentOne->setCreditCard($creditCard);
        // Create a transaction
          $transactionRequestType = new AnetAPI\TransactionRequestType();
          $transactionRequestType->setTransactionType("authCaptureTransaction");
          $transactionRequestType->setAmount($request->camount);
          $transactionRequestType->setPayment($paymentOne);
          $requesta = new AnetAPI\CreateTransactionRequest();
          $requesta->setMerchantAuthentication($merchantAuthentication);
          $requesta->setRefId( $refId);
          $requesta->setTransactionRequest($transactionRequestType);
          $controller = new AnetController\CreateTransactionController($requesta);
          // $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
          $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::PRODUCTION);
          $message = "";
          if ($response != null)
            {
              $tresponse = $response->getTransactionResponse();
              
                if (($tresponse != null) && ($tresponse->getResponseCode()=="1"))
                {
                  $message.="Successful<br>Charge Credit Card AUTH CODE : " . $tresponse->getAuthCode() . "\n";
                  $message.="Charge Credit Card TRANS ID  : " . $tresponse->getTransId() . "\n";
                }
                else
                {
                  $message.="Charge Credit Card ERROR :  Invalid response\n";
                }
                
            }
          else
            {
                $message.="Charge Credit Card Null response returned";
            }
          if($message!=NULL){
            //Process Convention Ticket
            $regno = "B19-".substr(md5(uniqid(mt_rand(), true).microtime(true)),0, 8);
      
            Payment::create([
              'name' => $request->name,
              'phoneno' => $request->phoneno,
              'address' => $request->address,
              'amount' => $request->camount,
    
              'paymentstatus'=>$message,
              'datepaid'=> date('Y-m-d'),
              'paymentref'=>$message,
              'remarks' =>$message,
              'ctickets'=>$request->ctickets,
              'atickets' =>$request->atickets,
              'rooms'=>$request->rooms,
              'regno'=>$regno,
              'email'=>$request->email
            ]);  
          }
            
        return view('/thankyou',['message'=>$message,'regno'=>$regno]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function show(Convention $convention)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function edit(Convention $convention)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Convention $convention)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convention $convention)
    {
        //
    }
}

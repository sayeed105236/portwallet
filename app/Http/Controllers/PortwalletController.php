<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use PortWallet\Exceptions\PortWalletException;
use Session;

use PortWallet\PortWallet;
use PortWallet\PortWalletClient;
use PortWallet\Exceptions\PortWalletClientException;

class PortwalletController extends Controller
{
    public function home()
    {
      return view('index');
    }
    public function payment(Request $request){


        /*$validator = Validator::make($request->all(), [
            'amount'    => 'required',
            'email'     => 'required',
            'name'      => 'required',
            'phone'     => 'required',
        ],
            [
                //'course_id.unique' => ' Program name is already exist',
            ]);
        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
            //return back()->withInput()->withErrors($validator->errors());
        }*/
        if (PortWallet::getApiMode() == "sandbox") {

            $this->api_url = 'https://api-sandbox.portwallet.com/payment/v2/ ';
            $this->app_key = '3ee2ab77858866db816aae7cff9c3e29';
            $this->secret_key = '55ba34e33ec387bc61a8d17da221f115';

        } else {
            $this->api_url = 'https://api.portwallet.com/payment/v2/invoice';
            $this->app_key = '3ee2ab77858866db816aae7cff9c3e29';
            $this->secret_key = '55ba34e33ec387bc61a8d17da221f115';

        }

        PortWallet::setApiMode("live");
//N.B.: API mode should be set first before creating an instance of PortWalletClient

        /**
         * initiate the PortWallet client
         */
        //dd($this->app_key);
        $portWallet = new PortWalletClient($this->app_key, $this->secret_key);
        //$authorization = “Bearer “. base64_encode(APPKEY.”:”.md5(SECRETKEY.time()));
//dd($portWallet);
       /**
        * Your data
        */
      //  dd($request->amount);
       $data = array(
           'order' => array(
             'amount' => 1,
            //  'amount' => floatval($request->amount),
               'currency' => 'BDT',
              // 'redirect_url' => 'https://globalskills.com.bd/portwallet/portwallet_verify_transaction/shopping_cart',
               'redirect_url' => URL::to('/portwallet/portwallet_verify_transaction/shopping_cart'),
               'ipn_url' => 'http://www.yoursite.com/ipn',
               'reference' => 'ABC123',
               'validity' => 900,
           ),
           'product' => array(
               'name' => "Manual Payment",
              //  'name' => $request->course_title,
               'description' => 'Course Payment',
           ),
           'billing' => array(
               'customer' => array(
                  // 'name' => $request->name,
                    'name' => "Abu Sayeed",
                     'email' => "abusayeed33343536@gmail.com",
                        'phone' => "01575202028",
                   //'email' => $request->email,
                  // 'phone' => $request->phone,
                   'address' => array(
                       'street' => 'Hayat Rose Park, Level 5, House No 16 Main Road, Bashundhara Residential Area',
                        'city' => 'Dhaka',
                       'state' => 'Dhaka',
                       'zipcode' => 1229,
                       'country' => 'BGD',
                   ),
               ),
           ),
           'discount' => array(
               'enable' => 1,
               'codes' => array(
                   0 => 'Bengal 1',
                   1 => 'Bengal 2',
               ),
           ),
           'emi' => [
               'enable' => 1,
               'tenures' => [],
           ]
       );

       try {

           $invoice = $portWallet->invoice->create($data);

           $paymentUrl = $invoice->getPaymentUrl();
           //dd($paymentUrl);

       } catch (InvalidArgumentException $ex) {
           echo $ex->getMessage();
       }catch (PortWalletException $ex) {
           echo $ex->getMessage();
       }

        return redirect($paymentUrl);

   }
   public function portwalletVerifyTransaction() {


           return redirect('https://globaskills.com.bd/paymentsuccess');

       }


}

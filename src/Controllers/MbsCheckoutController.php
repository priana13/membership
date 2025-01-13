<?php

namespace Priana\Membership\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Priana\Membership\Models\MbsPackage;
use Priana\Membership\Models\MbsTransaction;

class MbsCheckoutController extends Controller
{
    public function create($id){
     
        $package = MbsPackage::find($id);

        return view('mbs::checkout' , compact('package'));
    }

    public function store(Request $request){      

        // validate 
        $request->validate([
            "package_id" => "required",          
            "qty" => "required",
            "name" => "required",
            "phone_number" => "required",
        ]);

        // store to transaction 

        $user = $this->getUser();

        $package = MbsPackage::find($request->package_id);

        $uniq_code = $this->getUniqCode();

        $transaction = MbsTransaction::create([
            'user_id' => ($user) ? $user->id : null,
            'mbs_package_id' => $request->package_id,
            'date' => now(),
            'price' => $package->price,
            'qty' => $request->qty,
            'total_price' => ($request->qty * $package->price) + $uniq_code,
            'payment_method' => 'bank_transfer', // $request->payment_method,
            'status' => 'Pending', // $request->status, 
            "unique_code" => $uniq_code    
        ]);

        // redirect to payment
        return redirect()->route('mbs.checkout.payment' , $transaction->id);
    }

    public function payment($id){

        
        $transaction = MbsTransaction::find($id);

        /** 
         * array:3 
            "name" => "Bank Mandiri"
            "account_number" => "002544xxxx"
            "owner_name" => "Your Company"           
         */
        $payment_method = config('lara-member.payment.payment_methods.bank_transfer');
   
        return view('mbs::payment' , compact('transaction' , 'payment_method'));
    }

    private function getUser(){


        $user = ( auth()->user() ) ? auth()->user() : null;     
        
        
        if(!$user){


            $cek_user = User::where('email' , request()->email)->first();

            if($cek_user){

                $user = $cek_user;

            }else{


                $user = User::create([
                    'name' => request()->name,
                    'email' => request()->email,
                    // 'phone_number' => request()->phone_number,
                    'password' => bcrypt('password'),
                ]);

            }

          
        }

        return $user;
    }

    private function getUniqCode(){

        $code = 1;

        for ($i=0; $i < 1000; $i++) { 
            $cek = MbsTransaction::where('unique_code' , $i)->whereMonth('date' , date('m'))->whereYear('date' , date('Y'))->count();

            if(!$cek){
                $code = $i;
                break;
            }
        }

        return $code;

    }
}

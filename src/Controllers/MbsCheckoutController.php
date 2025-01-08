<?php

namespace Priana\Membership\Controllers;

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

        $transaction = MbsTransaction::create([
            'user_id' => $user->id,
            'mbs_package_id' => $request->package_id,
            'date' => now(),
            'price' => $package->price,
            'qty' => $request->qty,
            'total_price' => $request->qty * $package->price,
            'payment_method' => 'cash', // $request->payment_method,
            'status' => 'Pending', // $request->status, 
            "unique_code" => 12      
        ]);

        // redirect to payment
        return redirect()->route('mbs.checkout.payment' , $transaction->id);
    }

    public function payment(){

        // get transaction data

        return view('mbs::payment');
    }

    private function getUser(){

        $user = auth()->user();

        return $user;
    }
}

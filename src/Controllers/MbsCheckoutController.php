<?php

namespace Priana\Membership\Controllers;

use Priana\Membership\Models\MbsPackage;
use Illuminate\Http\Request;

class MbsCheckoutController
{
    public function create($id){
     
        $package = MbsPackage::find($id);

        return view('mbs::checkout' , compact('package'));
    }

    public function store(Request $request){

        // validate 

        // store to transaction 

        // redirect to payment
    }

    public function payment(){

        // get transaction data

        return view('mbs::payment');
    }
}

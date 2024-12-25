<?php

namespace Priana\Membership\Controllers;

use Priana\Membership\Models\MbsPackage;

class MbsPackageController
{
    public function show($id){

        $package = MbsPackage::find($id);
        
        return view('mbs::package' , compact('package'));
    }
}

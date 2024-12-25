<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
use Priana\Membership\Models\MbsPackage;
use Priana\Membership\Models\MbsSubscription;
use Priana\Membership\Controllers\MbsPackageController;

Route::get('member/test', function () {

    $user = \App\Models\User::find(288);
    // $package = MbsPackage::find(1);

    // MbsSubscription::addSubscription($user , $package);

    // $my_subs = $user->subscriptions;

    $user = \App\Models\User::find(288);
    $check_sub = $user->subscriptions()->active()->exists();
    
});


Route::get('/mbs/package/{id}' , [MbsPackageController::class, 'show']);
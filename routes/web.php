<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
use Priana\Membership\Models\MbsPackage;
use Priana\Membership\Models\MbsSubscription;
use Priana\Membership\Controllers\MbsPackageController;
use Priana\Membership\Controllers\MbsCheckoutController;

Route::get('member/test', function () {

    $user = \App\Models\User::find(288);
    // $package = MbsPackage::find(1);

    // MbsSubscription::addSubscription($user , $package);

    // $my_subs = $user->subscriptions;

    $user = \App\Models\User::find(288);
    $check_sub = $user->subscriptions()->active()->exists();
    
});



Route::middleware('web')->group(function () {

    Route::get('/mbs/package/{id}' , [MbsPackageController::class, 'show'])->name('mbs.package');

    Route::get('/mbs/checkout/{id}' , [MbsCheckoutController::class, 'create'])->name('mbs.checkout');
    
    Route::post('/mbs/checkout-store' , [MbsCheckoutController::class, 'store'])->name('mbs.checkout.store');
    
    Route::get('/mbs/checkout/{id}/payment' , [MbsCheckoutController::class, 'payment'])->name('mbs.checkout.payment');

  
});



<?php 
namespace Priana\Membership\Traits;

use Priana\Membership\Models\MbsSubscription;
use Priana\Membership\Models\MbsTransaction;

Trait HasMembership {

	public function subscriptions(){

		return $this->hasMany(MbsSubscription::class, 'user_id');
	}

	public function transactions(){

		return $this->hasMany(MbsTransaction::class, 'user_id');
	}

}
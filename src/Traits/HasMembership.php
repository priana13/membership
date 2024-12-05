<?php 
namespace Priana\Membership\Traits;

use App\Models\Membership;

Trait HasMembership {

	public function membership(){

		return $this->hasMany(Membership::class, 'user_id');
	}

}
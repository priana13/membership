<?php

namespace Priana\Membership\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class MbsSubscription extends Model
{
    protected $table = "mbs_subscriptions";

    protected $guarded = [];

    public function user(){

    	return $this->belongsTo(User::class, 'user_id');
    }

    public function package(){

    	return $this->belongsTo(MbsPackage::class, 'mbs_package_id');
    }

}

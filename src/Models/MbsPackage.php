<?php

namespace Priana\Membership\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MbsPackage extends Model
{
    protected $table = "mbs_packages";

    protected $guarded = [];

    public function subscriptions(){

    	return $this->hasMany(MbsTransaction::class, 'mbs_package_id');
    }
}

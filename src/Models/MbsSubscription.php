<?php

namespace Priana\Membership\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class MbsSubscription extends Model
{
    protected $table = "mbs_subscriptions";

    protected $guarded = [];

    protected $with = ['package' , 'user'];

    public function user(){

    	return $this->belongsTo(User::class, 'user_id');
    }

    public function package(){

    	return $this->belongsTo(MbsPackage::class, 'mbs_package_id');
    }

    // scopes ==============

    public function scopeActive($query){

        return $query->where('status' , 'Active');
    }

    public function scopeExpired($query){

        return $query->where('status' , 'Expired');
    }

    public static function addSubscription(User $user , MbsPackage $package){

        $check = self::where('user_id' , $user->id)->where('mbs_package_id' , $package->id)->exists();

        if(!$check){

            self::create([
                'user_id' => $user->id,
                'mbs_package_id' => $package->id,
                'expired_at' => now()->addDays($package->duration),
                'status' => 'active'
            ]);

        }

      

    }

}

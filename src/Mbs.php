<?php 

namespace Priana\Membership;


class Mbs {

    // public static bool $status = false;

    /**
     * check subcription status
     */
    public static function check() {

        $status = auth()->user()->subscriptions()->active()->exists();


        return $status;
    }
}
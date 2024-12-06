Library membership untuk laravel

## Fitures
* Packages
* Add users to packages
* Package transactions
* Membership expiration

## Instalasi
`composer require priana/membership`


## Migration
`php artisan migrate`

## Get My Subscriptions

    use App\Models\User;
    use Priana\Membership\Models\MbsPackage;
    use Priana\Membership\Models\MbsSubscription;

    public function getMySubscriptions () {

        $user = \App\Models\User::find(2);
        $package = MbsPackage::find(1);

        MbsSubscription::addSubscription($user , $package);

        $my_subs = $user->subscriptions;

         return $my_subs;
    }

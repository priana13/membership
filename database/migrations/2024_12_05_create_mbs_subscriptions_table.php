<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mbs_subscriptions', function (Blueprint $table) {
            $table->id();           
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('mbs_package_id');
            $table->date('expired_at');
            $table->string('status' , 30);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mbs_subscriptions');
    }
};

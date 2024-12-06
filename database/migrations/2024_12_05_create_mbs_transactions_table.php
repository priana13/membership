<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mbs_transactions', function (Blueprint $table) {
            $table->id();           
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('mbs_package_id');
            $table->date('date');
            $table->integer('price');
            $table->integer('qty')->default(1);
            $table->integer('unique_code')->nullable();
            $table->string('payment_method');
            $table->integer('total_price');
            $table->string('attachment')->nullable();
            $table->string('status' , 30); // status : pending, completed, expired
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mbs_transactions');
    }
};

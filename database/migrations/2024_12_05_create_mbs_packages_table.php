<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mbs_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 100);
            $table->integer('price');
            $table->integer('month_qty');
            $table->text('detail')->nullable();         
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mbs_packages');
    }
};

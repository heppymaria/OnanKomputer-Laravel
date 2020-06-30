<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id',10);
            $table->string('users_email',255);
            $table->string('name',255);
            $table->string('country',255);
            $table->string('province',255);
            $table->string('region',255);
            $table->string('city',255);
            $table->string('barangay',255);
            $table->string('address',255);
            $table->string('postal_code',255);
            $table->string('phone_number',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_address');
    }
}

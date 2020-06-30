<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
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
            $table->float('delivery_cost');
            $table->integer('products_id',10);
            $table->string('products_name',255);
            $table->string('order_status',255);
            $table->string('payment_method',255);
            $table->float('grand_total',255);
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
        Schema::dropIfExists('orders');
    }
}

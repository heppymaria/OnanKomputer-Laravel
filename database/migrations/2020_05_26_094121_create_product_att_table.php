<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_att', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id',10);
            $table->string('sku',255);
            $table->string('color',255);
            $table->float('price',255);
            $table->integer('stock',255);
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
        Schema::dropIfExists('product_att');
    }
}

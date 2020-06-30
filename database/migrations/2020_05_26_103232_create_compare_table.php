<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compare', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id',10);
            $table->string('products_code',255);
            $table->string('products_name',255);
            $table->integer('products_categories_id',10);
            $table->text('products_description');
            $table->float('products_price',255);
            $table->string('session_id',255);
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
        Schema::dropIfExists('compare');
    }
}

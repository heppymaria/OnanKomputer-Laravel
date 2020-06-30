<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('email',255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',255);
            $table->tinyInteger('admin',4)->nullable();
            $table->string('country',255);
            $table->string('province',255);
            $table->string('region',255);
            $table->string('city',255);
            $table->string('barangay',255);
            $table->string('address',255);
            $table->string('postal_code',255);
            $table->string('phone_number',255);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

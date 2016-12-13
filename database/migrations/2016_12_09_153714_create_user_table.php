<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('fid')->unsigned()->nullable();
            $table->string('name', 120)->nullable();
            $table->string('lastname', 120)->nullable();
            $table->string('email', 255);
            $table->string('password', 255);
            $table->text('picture')->nullable();
            $table->enum('gender', array('M', 'F'))->nullable();
            $table->date('birthday')->nullable();
            $table->string('document', 120)->nullable();
            $table->string('phone_number', 120)->nullable();
            $table->string('phone_model', 120)->nullable();
            $table->string('country', 120)->nullable();
            $table->string('zipcode', 10)->nullable();
            $table->boolean('is_blyps')->default(0);
            $table->boolean('is_newsletter')->default(0);
            $table->boolean('is_active')->default(1);
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
        Schema::drop('user');
    }
}

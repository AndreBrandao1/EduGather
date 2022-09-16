<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cou_title');
            $table->string('cou_description');
            $table->string('cou_logo');
            $table->unsignedBigInteger('trainer_id');
            $table->unsignedBigInteger('cat_id');
            $table->enum('cou_statue', ['on_hold', 'verified', 'denied']);
            $table->foreign('trainer_id')->references('id')->on('users');
            $table->foreign('cat_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};

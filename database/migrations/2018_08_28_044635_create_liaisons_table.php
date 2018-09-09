<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiaisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liaisons', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('position_id');
            $table->foreign('position_id')->references('id')->on('organisations')->onDelete('cascade');
            $table->string('first_name')->nullable();
            $table->string('last_name', 25)->nullable();
            $table->string('job_title', 25)->nullable();
            $table->string('email', 80)->nullable();
            $table->string('phone', 25)->nullable();
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
        Schema::dropIfExists('liaisons');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisaInstancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_instances', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('position_id');
            $table->foreign('position_id')->references('id')->on('organisations')->onDelete('cascade');
            $table->unsignedInteger('visa_id');
            $table->foreign('visa_id')->references('id')->on('visas')->onDelete('cascade');
            $table->string('registration_number', 50)->nullable();
            $table->timestamp('issue_date')->nullable();
            $table->timestamp('expiry_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visa_instances');
    }
}

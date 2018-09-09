<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_links', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('sociable');
            $table->string('website', 128)->nullable();
            $table->string('phone', 128)->nullable();
            $table->string('email', 128)->nullable();
            $table->string('mobilephone', 128)->nullable();
            $table->string('facebook', 128)->nullable();
            $table->string('youtube', 128)->nullable();
            $table->string('instagram', 128)->nullable();
            $table->string('twitter', 128)->nullable();
            $table->string('reddit', 128)->nullable();
            $table->string('pinterest', 128)->nullable();
            $table->string('tumblr', 128)->nullable();
            $table->string('googleplus', 128)->nullable();
            $table->string('linkedin', 128)->nullable();
            $table->string('whatsapp', 128)->nullable();
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
        Schema::dropIfExists('social_links');
    }
}

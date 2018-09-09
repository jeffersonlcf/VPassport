<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('media_types');
        Schema::create('media_types', function (Blueprint $table) {
            $table->string('type');
            $table->primary('type');
        });

        DB::table('media_types')->insert([
            ['type' => 'audio'],
            ['type' => 'image'],
            ['type' => 'video'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_types');
    }
}

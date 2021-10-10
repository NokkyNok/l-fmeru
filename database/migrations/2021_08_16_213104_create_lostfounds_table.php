<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostfoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lostfounds', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->string('location');
            $table->string('Received_date');
            $table->string('Received_time');
            $table->string('sample_image');
            $table->string('short_description');
            $table->string('Received_from');
            $table->string('Received_email');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('lostfounds');
    }
}

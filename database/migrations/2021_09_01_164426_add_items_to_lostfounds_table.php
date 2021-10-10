<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItemsToLostfoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lostfounds', function (Blueprint $table) {

            $table -> string('bearer');
            $table -> string('location_desc');
            $table -> string('Received_location');
            $table -> string('phone');

            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lostfounds', function (Blueprint $table) {
            //
        });
    }
}

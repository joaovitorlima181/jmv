<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacketHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packet_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('packetType');
            $table->integer('createdAt');
            $table->text('hexData');
            $table->boolean('isNew')->default(0);
            $table->json('packetData');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packet_histories');
    }
}

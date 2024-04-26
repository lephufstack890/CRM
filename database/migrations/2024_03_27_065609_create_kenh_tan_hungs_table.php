<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKenhTanHungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kenh_tan_hungs', function (Blueprint $table) {
            $table->id();
            $table->string('day')->nullable();
            $table->string('thuong_luu')->nullable();
            $table->string('ha_luu')->nullable();
            $table->string('THL')->nullable();
            $table->string('A_1')->nullable();
            $table->string('A_2')->nullable();
            $table->string('A_3')->nullable();
            $table->string('Q_m3')->nullable();
            $table->string('khoi_luong_m3')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('kenh_tan_hungs');
    }
}

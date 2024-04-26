<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKenhDongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kenh_dongs', function (Blueprint $table) {
            $table->id();
            $table->string('day')->nullable();
            $table->string('HTL')->nullable();
            $table->string('HHL_17_50')->nullable();
            $table->string('a1')->nullable();
            $table->string('a2')->nullable();
            $table->string('a3')->nullable();
            $table->string('HTL_17_32')->nullable();
            $table->string('HTL_16_20')->nullable();
            $table->string('HTL_16_07')->nullable();
            $table->string('HHL_15_90')->nullable();
            $table->string('HTL_15_69')->nullable();
            $table->string('HHL_15_49')->nullable();
            $table->string('HTL_15_19')->nullable();
            $table->string('HHL_15_00')->nullable();
            $table->string('HTL_14_85')->nullable();
            $table->string('HHL_14_40')->nullable();
            $table->string('HTL_3_82')->nullable();
            $table->string('HHL_13_62')->nullable();
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kenh_dongs');
    }
}

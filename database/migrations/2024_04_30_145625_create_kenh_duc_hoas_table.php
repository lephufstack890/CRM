<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKenhDucHoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kenh_duc_hoas', function (Blueprint $table) {
            $table->id();
            $table->string('day')->nullable();
            $table->string('HTL_14_08')->nullable();
            $table->string('HHL_13_72')->nullable();
            $table->string('HTL_13_54')->nullable();
            $table->string('HHL_13_04')->nullable();
            $table->string('HTL_12_85')->nullable();
            $table->string('HHL_12_35')->nullable();
            $table->string('HTL_9_24')->nullable();
            $table->string('HHL_8_89')->nullable();
            $table->string('HTL_7_50')->nullable();
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
        Schema::dropIfExists('kenh_duc_hoas');
    }
}

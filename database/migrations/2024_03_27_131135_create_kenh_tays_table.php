<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKenhTaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kenh_tays', function (Blueprint $table) {
            $table->id();
            $table->string('day')->nullable();
            $table->string('HTL')->nullable();
            $table->string('HTL_16_77')->nullable();
            $table->string('m_a1')->nullable();
            $table->string('m_a2')->nullable();
            $table->string('m_a3')->nullable();
            $table->string('HTL_15_99')->nullable();
            $table->string('HTL_15_49')->nullable();
            $table->string('CDTK1_a1')->nullable();
            $table->string('CDTK1_a2')->nullable();
            $table->string('CDTK1_a3')->nullable();
            $table->string('Q_m3')->nullable();
            $table->string('HTL_15_75')->nullable();
            $table->string('HHL_15_55')->nullable();
            $table->string('HTL_14_96')->nullable();
            $table->string('HHL_14_95')->nullable();
            $table->string('HTL_14_71')->nullable();
            $table->string('HHL_14_46')->nullable();
            $table->string('HTL_14_05')->nullable();
            $table->string('HHL_14_04')->nullable();
            $table->string('HTL_13_47')->nullable();
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
        Schema::dropIfExists('kenh_tays');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKenhPhuocHoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kenh_phuoc_hoas', function (Blueprint $table) {
            $table->id();
            $table->string('day')->nullable();
            $table->string('zho')->nullable();
            $table->string('who106_m3')->nullable();
            $table->string('Q_den_m3')->nullable();
            $table->string('W_den_106_m3')->nullable();
            $table->string('HHL_42_27')->nullable();
            $table->string('A_1')->nullable();
            $table->string('A_2')->nullable();
            $table->string('A_3')->nullable();
            $table->string('Q_cong_m3')->nullable();
            $table->string('W_cong_106_m3')->nullable();
            $table->string('Q_tran_m3')->nullable();
            $table->string('W_tran_106_m3')->nullable();
            $table->string('QTMV_m3')->nullable();
            $table->string('WTMV_106_m3')->nullable();
            $table->string('QMT_m3')->nullable();
            $table->string('WMT_106_m3')->nullable();
            $table->string('QĐCĐ_m3')->nullable();
            $table->string('WĐCĐ_106_m3')->nullable();
            $table->string('HTL_41_82')->nullable();
            $table->string('HHL_41_76')->nullable();
            $table->string('HTL_40_64')->nullable();
            $table->string('HHL_40_64')->nullable();
            $table->string('HTL_39_75')->nullable();
            $table->string('HHL_39_07')->nullable();
            $table->string('HTL_38_55')->nullable();
            $table->string('HHL_29_48')->nullable();
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
        Schema::dropIfExists('kenh_phuoc_hoas');
    }
}

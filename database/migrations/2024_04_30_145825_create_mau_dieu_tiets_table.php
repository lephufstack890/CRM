<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMauDieuTietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mau_dieu_tiets', function (Blueprint $table) {
            $table->id();
            $table->string('day')->nullable();
            $table->string('zho_N_TRUOC')->nullable();
            $table->string('zho_N_NAY')->nullable();
            $table->string('who_106_m3')->nullable();
            $table->string('Q_den_m3')->nullable();
            $table->string('W_den_106_m3')->nullable();
            $table->string('QPH_m3')->nullable();
            $table->string('WPH_106_m3')->nullable();
            $table->string('Q_tran_m3')->nullable();
            $table->string('W_tran_106_m3')->nullable();
            $table->string('Q_cong1_m3')->nullable();
            $table->string('W_cong1_106_m3')->nullable();
            $table->string('Q_cong2_m3')->nullable();
            $table->string('W_cong2_106_m3')->nullable();
            $table->string('Q_cong3_m3')->nullable();
            $table->string('W_cong3_106_m3')->nullable();
            $table->string('Q_ton_that_m3')->nullable();
            $table->string('W_ton_that_106_m3')->nullable();
            $table->string('Q_tong_nuoc_di_m3')->nullable();
            $table->string('W_tong_nuoc_di_106_m3')->nullable();
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
        Schema::dropIfExists('mau_dieu_tiets');
    }
}

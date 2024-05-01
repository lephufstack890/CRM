<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMauNhapSosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mau_nhap_sos', function (Blueprint $table) {
            $table->id();
            $table->string('day')->nullable();
            $table->string('hour')->nullable();
            $table->string('zho_DT')->nullable();
            $table->string('Q_den_ho_DT')->nullable();
            $table->string('tong_Q_tran_m3')->nullable();
            $table->string('A_1_tran')->nullable();
            $table->string('A_2_tran')->nullable();
            $table->string('A_3_tran')->nullable();
            $table->string('A_4_tran')->nullable();
            $table->string('A_5_tran')->nullable();
            $table->string('A_6_tran')->nullable();
            $table->string('HHL_cong1')->nullable();
            $table->string('A_1_cong1')->nullable();
            $table->string('A_2_cong1')->nullable();
            $table->string('A_3_cong1')->nullable();
            $table->string('QCS1_m3')->nullable();
            $table->string('HHL_cong2')->nullable();
            $table->string('A_1_cong2')->nullable();
            $table->string('A_2_cong2')->nullable();
            $table->string('A_3_cong2')->nullable();
            $table->string('QCS2_m3')->nullable();
            $table->string('HHL_cong3')->nullable();
            $table->string('A_1_cong3')->nullable();
            $table->string('QCS3_m3')->nullable();
            $table->string('zho_PH')->nullable();
            $table->string('QPH_DT_m3')->nullable();
            $table->string('QMT_m3')->nullable();
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
        Schema::dropIfExists('mau_nhap_sos');
    }
}

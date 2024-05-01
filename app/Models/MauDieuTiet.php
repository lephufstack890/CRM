<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MauDieuTiet extends Model
{
    use HasFactory;
    protected $fillable = [
        'day',
        'zho_N_TRUOC',
        'zho_N_NAY',
        'who_106_m3',
        'Q_den_m3',
        'W_den_106_m3',
        'QPH_m3',
        'WPH_106_m3',
        'Q_tran_m3',
        'W_tran_106_m3',
        'Q_cong1_m3',
        'W_cong1_106_m3',
        'Q_cong2_m3',
        'W_cong2_106_m3',
        'Q_cong3_m3',
        'W_cong3_106_m3',
        'Q_ton_that_m3',
        'W_ton_that_106_m3',
        'Q_tong_nuoc_di_m3',
        'W_tong_nuoc_di_106_m3',
    ];
}

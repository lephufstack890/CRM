<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MauNhapSo extends Model
{
    use HasFactory;
    protected $fillable = [
        'day',
        'hour',
        'zho_DT',
        'Q_den_ho_DT',
        'tong_Q_tran_m3',
        'A_1_tran',
        'A_2_tran',
        'A_3_tran',
        'A_4_tran',
        'A_5_tran',
        'A_6_tran',
        'HHL_cong1',
        'A_1_cong1',
        'A_2_cong1',
        'A_3_cong1',
        'QCS1_m3',
        'HHL_cong2',
        'A_1_cong2',
        'A_2_cong2',
        'A_3_cong2',
        'QCS2_m3',
        'HHL_cong3',
        'A_1_cong3',
        'QCS3_m3',
        'zho_PH',
        'QPH_DT_m3',
        'QMT_m3',
    ];
}

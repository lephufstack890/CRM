<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KenhPhuocHoa extends Model
{
    use HasFactory;
    protected $fillable = [
        'day',
        'zho',
        'who106_m3',
        'Q_den_m3',
        'W_den_106_m3',
        'HHL_42_27',
        'A_1',
        'A_2',
        'A_3',
        'Q_cong_m3',
        'W_cong_106_m3',
        'Q_tran_m3',
        'W_tran_106_m3',
        'QTMV_m3',
        'WTMV_106_m3',
        'QMT_m3',
        'WMT_106_m3',
        'QĐCĐ_m3',
        'WĐCĐ_106_m3',
        'HTL_41_82',
        'HHL_41_76',
        'HTL_40_64',
        'HHL_40_64',
        'HTL_39_75',
        'HHL_39_07',
        'HTL_38_55',
        'HHL_29_48',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KenhTanHung extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'thuong_luu',
        'ha_luu',
        'THL',
        'A_1',
        'A_2',
        'A_3',
        'Q_m3',
        'khoi_luong_m3',
        'note'
    ];
}

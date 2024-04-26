<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KenhDong extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'HTL',
        'HHL_17_50',
        'a1',
        'a2',
        'a3',
        'HTL_17_32',
        'HTL_16_20',
        'HTL_16_07',
        'HHL_15_90',
        'HTL_15_69',
        'HHL_15_49',
        'HTL_15_19',
        'HHL_15_00',
        'HTL_14_85',
        'HHL_14_40',
        'HTL_3_82',
        'HHL_13_62',
    ];
}

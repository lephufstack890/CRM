<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KenhTay extends Model
{
    use HasFactory;
    protected $fillable = [
        'day',
        'HTL',
        'HTL_16_77',
        'm_a1',
        'm_a2',
        'm_a3',
        'HTL_15_99',
        'HTL_15_49',
        'CDTK1_a1',
        'CDTK1_a2',
        'CDTK1_a3',
        'Q_m3',
        'HTL_15_75',
        'HHL_15_55',
        'HTL_14_96',
        'HHL_14_95',
        'HTL_14_71',
        'HHL_14_46',
        'HTL_14_05',
        'HHL_14_04',
        'HTL_13_47'
    ];
}

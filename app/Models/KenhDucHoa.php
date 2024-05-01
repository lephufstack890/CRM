<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KenhDucHoa extends Model
{
    use HasFactory;
    protected $fillable = [
        'day',
        'HTL_14_08',
        'HHL_13_72',
        'HTL_13_54',
        'HHL_13_04',
        'HTL_12_85',
        'HHL_12_35',
        'HTL_9_24',
        'HHL_8_89',
        'HTL_7_50',
        'note',
    ];
}

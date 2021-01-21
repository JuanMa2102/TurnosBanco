<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telleremploye extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'catteller_id',
        'enable',
        'open',
        'close',
    ];
}

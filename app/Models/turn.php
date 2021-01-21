<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turn extends Model
{
    use HasFactory;

    protected $fillable = [
        'telleremploye_id',
        'customer_id',
    ];
}

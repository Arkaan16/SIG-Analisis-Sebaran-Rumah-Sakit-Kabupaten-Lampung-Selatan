<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rs extends Model
{
    use HasFactory;

    protected $fillable = [
        'namobj', 'remark', 'alamat', 'foto', 'latitude', 'longitude'
    ];
}

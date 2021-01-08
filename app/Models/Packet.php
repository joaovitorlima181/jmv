<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    use HasFactory;

    protected $fillable = ['packetHistory'];
    public $timestamps = false;

    protected $casts =['packetHistory' => 'array'];
}

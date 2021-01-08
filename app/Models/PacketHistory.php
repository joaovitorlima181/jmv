<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacketHistory extends Model
{
    use HasFactory;

    protected $fillable = ['packetType', 'createdAt', 'hexData', 'isNew', 'packetData'];
    public $timestamps = false;

    protected $casts =['packetData' => 'array'];

}

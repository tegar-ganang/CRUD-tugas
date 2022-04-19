<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    use HasFactory;
    protected $table = "announces";
    protected $guarded = [];
    protected $fillable = [
        'nama',
        'nrp',
        'tahunmasuk',
        'semester',
        'jurusan',
        'ips',
        'ipk'

    ];
}

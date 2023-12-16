<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    use HasFactory; 
    protected $fillable = [
        'nama',
        'alamat_lengkap',
        'nomor_hp',
        'lulusan',

    ];
}

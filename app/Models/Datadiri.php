<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datadiri extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'usia',
        'lulusan',
        'keahlian',
        'image',

    ];
}

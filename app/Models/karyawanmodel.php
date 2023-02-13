<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawanmodel extends Model
{
    use HasFactory;

    protected $table = "karyawan";
    protected $fillable = ['name', 'umur', 'alamat', 'nomor'];
}

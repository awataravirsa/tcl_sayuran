<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sayuran extends Model
{
    use HasFactory;
    protected $table = 'sayuran';
    protected $fillable = ['id', 'nama_pembeli', 'nama_sayuran', 'tanggal_stok', 'jumlah'];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nama_pembeli extends Model
{
    use HasFactory;
    protected $table = "nama_pembeli";
    protected $fillable = [
        #'id',
        'nama'
    ];
}
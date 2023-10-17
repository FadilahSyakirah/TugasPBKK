<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    //protected $primarykey = 'id_kategori';

    protected $fillable = [
        'id_menu',
        'nama_menu',
        'harga',
        'gambar',
        'deskripsi'
    ];
}

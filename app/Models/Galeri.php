<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "galeri"; //cek
    protected $primaryKey = "id_gambar"; //cek

    protected $fillable = [
        'id_gambar', 'id_panti', 'url_gambar','deskripsi'    
    ];
}

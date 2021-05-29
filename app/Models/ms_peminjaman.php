<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_peminjaman extends Model
{
    use HasFactory;
    protected $table = "ms_peminjaman";
    protected $primarkey = "kode_pinjaman";
    protected $keyType = "char";

    protected $fillable = [
        'kode_peminjam',
        'nama_peminjam',
        'alamat_peminjam',
        'telp_peminjam',
        
    ]
}

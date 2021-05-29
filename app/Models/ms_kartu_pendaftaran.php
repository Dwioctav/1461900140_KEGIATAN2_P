<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_kartu_pendaftaran extends Model
{
    use HasFactory;
    protected $table = "ms_kartu_pendaftaran";
    protected $primarkey = "kode_kartu";
    protected $keyType = "char";

    protected $fillable = [
        'kode_kartu',
        'kode_petugas',
        'kode_pinjam',
        'tgl_pembuatan',
        'tgl_akhir'
        'status_aktif'
    ]
}

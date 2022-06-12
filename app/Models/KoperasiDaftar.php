<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class KoperasiDaftar extends Model
{
    use HasFactory;
    protected $table = "koperasi_daftar";

    protected $fillable = ["judul", "foto", "kecamatan", "kelurahan", "jenis", "tahun", "contact", "alamat"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}

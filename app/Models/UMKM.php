<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class UMKM extends Model
{
    use HasFactory;
    protected $table = "umkm";

    protected $fillable = ["judul", "foto", "kecamatan", "kelurahan", "jenis", "tahun", "contact", "alamat"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class KubeDaftar extends Model
{
    use HasFactory;
    protected $table = "kube_sentra";

    protected $fillable = ["judul", "foto", "kecamatan", "kelurahan", "jenis", "tahun", "contact", "alamat"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}
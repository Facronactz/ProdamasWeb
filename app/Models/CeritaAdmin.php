<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class CeritaAdmin extends Model
{
    use HasFactory;
    protected $table = "tulis_ceritas";

    protected $fillable = ["nama","nomor_telepon","email","judul","ringkasan","foto","file"];

    public function getCreatedAtAttribute() {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}

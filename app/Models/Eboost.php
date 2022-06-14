<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Eboost extends Model
{
    use HasFactory;
    protected $table = "eboost";

    protected $fillable = ["id","judul_tentang", "caption_tentang","judul_info",
            "caption_info","foto_tentang", "foto_info", "deskripsi"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('d F Y');
    }
}

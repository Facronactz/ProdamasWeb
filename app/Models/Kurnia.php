<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Kurnia extends Model
{
    use HasFactory;
    protected $table = "kurnia";

    protected $fillable = ["id","judul_alur", "caption_alur","judul_info",
            "caption_info","foto_alur", "foto_info", "deskripsi"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('d F Y');
    }
}

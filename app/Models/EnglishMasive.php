<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class EnglishMasive extends Model
{
    use HasFactory;
    protected $table = "english_masive";

    protected $fillable = ["judul", "deskripsi", "judul_tutor", "tableau_tutor", "judul_partisipan", "tableau_partisipan", "konten", "sumber", "created_at", "updated_at"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}

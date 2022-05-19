<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class AudioAdmin extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;

    protected $table = "audios";

    protected $fillable = ["gambar_sampul", "judul", "konten", "caption",];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}

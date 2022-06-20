<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class RTH extends Model
{
    use HasFactory;
    protected $table = "rth";

    protected $fillable = ["judul", "deskripsi", "tableau", "konten", "sumber", "created_at", "updated_at"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}
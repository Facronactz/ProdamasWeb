<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Wirausaha extends Model
{
    use HasFactory;
    protected $table = "wirausaha";

    protected $fillable = ["id","tentang", "info", "foto_tentang", "foto_info", "deskripsi"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('d F Y');
    }
}

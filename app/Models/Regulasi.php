<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Regulasi extends Model
{
    use HasFactory;
    protected $table = "regulasi";

    protected $fillable = ["judul", "file", "sumber"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('d F Y');
    }
}

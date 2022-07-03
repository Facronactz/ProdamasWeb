<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class MSIB extends Model
{
    use HasFactory;
    protected $table = "msib";
    protected $fillable = ["nama", "foto", "prodi", "univ", "domisili", "ig", "linkedin"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pict extends Model
{
    use HasFactory;
    protected $table = "pict";
    public $incrementing = false;
    protected $fillable = ["id", "foto_kota", "foto_pesantren", "foto_mojoroto"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('d F Y');
    }
}

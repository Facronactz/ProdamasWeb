<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Koperasirw extends Model
{
    use HasFactory;
    protected $table = "koperasi";
    public $incrementing = false;
    protected $fillable = ["id", "deskripsi"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}

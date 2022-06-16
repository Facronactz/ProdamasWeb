<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Kube extends Model
{
    use HasFactory;
    protected $table = "kube";
    public $incrementing = false;
    protected $fillable = ["id", "informasi", "foto_syarat", "foto_alur", "proposal"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}

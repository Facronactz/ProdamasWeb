<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class DescriptionAdmin extends Model
{
    use HasFactory;
    protected $table = "descriptions";
    public $incrementing = false;
    protected $fillable = ["id", "desc_kampungkeren", "desc_bidang", "desc_pokmas", "desc_tuliscerita"];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}

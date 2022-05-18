<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class FotoAdmin extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;
    
    protected $table = "fotos";

    protected $fillable = ["judul","konten","caption"];

    public function getCreatedAtAttribute() {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}

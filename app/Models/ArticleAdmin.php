<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ArticleAdmin extends Model
{
    use HasFactory;
    protected $table = "articles";

    protected $fillable = ["status","gambar_sampul","text_sampul","judul","slug","article","picture"];

    public function getCreatedAtAttribute() {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}

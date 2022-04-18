<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingCarousel extends Model
{
    use HasFactory;
    protected $table = "setting_carousel";

    protected $fillable = ["nama", "foto"];

    public $timestamps = true;
}

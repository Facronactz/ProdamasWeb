<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_menu extends Model
{
    use HasFactory;

    protected $table = 'admin_menu';
    protected $fillable = ['name', 'icon', 'color', 'link'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;
    
    protected $table = "posts";
    protected $fillable=[
        'title',
        'body',
        'cover',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }
}

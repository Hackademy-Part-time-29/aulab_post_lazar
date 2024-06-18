<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'subtitle', 'body', 'image', 'user_id', 'category_id'
    ];

    public function user(){
        return $this->belongTo(User::class);
    }

    public function category(){
        return $this->belongTo(Category::class);
    }
}

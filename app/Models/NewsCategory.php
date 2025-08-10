<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $fillabel = [
        'title',
        'slug',
        
    ];
    // banyak berita bisa punya banyak category
    public function news(){
    return $this->hasMany(News::class);
}
}


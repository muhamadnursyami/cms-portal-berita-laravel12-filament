<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillabel = [
        'author_id',
        'news_category_id',
        'title',
        'slug',
        'thumbnail',
        'content',
        
    ];

// Definisikan relasi dimana tabel author relasi
// dengan tabel news, dimana 1 author memiliki banyak news
// jadi relasinya itu author one dan news itu many
// jadi kita perlu definisikan bahwa di tabel news,
// author itu bisa memiliki banyak news
// namun news itu hanya memiliki 1 author
// jadi definisikan  semua yang punya relasi.
// seperti tabel author dan newsCategory
    public function author(){
        return $this->belongsTo(Author::class);
    }
    // dan 1 berita atau belongsTo ke tabel newCatgeory 
    // dimana 1 berita memiliki banyak kategori
    public function newCategory(){
        return $this->belongsTo(NewsCategory::class);
    }
    public function banner(){
        return $this->hasOne(Banner::class);
    }
}

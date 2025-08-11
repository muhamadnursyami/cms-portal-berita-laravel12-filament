<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'username',
        'avatar',
        'bio',
    ];
// Definisikan relasi dimana tabel autho relasi
// dengan tabel news, dimana 1 author memiliki banyak news
// jadi relasinya itu author one dan news itu many
// jadi kita perlu definisikan bahwa di tabel news,
// author itu bisa memiliki banyak news
// namun news itu hanya memiliki 1 author
// jadi definisikan  semua yang punya relasi.
    public function news(){
        return $this->hasMany(News::class);
    }
}

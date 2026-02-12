<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    //ini adalah model yang dibuat secara otomatis, sehingga sudah langsung menggunaan eloquent
    protected $fillable = ['slug', 'title', 'author_id', 'category_id', 'city', 'date', 'body', 'category_id'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}

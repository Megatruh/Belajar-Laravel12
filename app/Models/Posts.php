<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    //ini adalah model yang dibuat secara otomatis, sehingga sudah langsung menggunaan eloquent
    protected $fillable = ['slug', 'title', 'author_id', 'category_id', 'city', 'body', 'category_id'];

    protected $with = [
        'author',
        'category'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    #[Scope]
    public function scopeFilter(Builder $query, array $filters)
    {
        $query->when($filters['keyword'] ?? false, function($query, $titleSeach){
            return $query->where('title', 'like', '%'.$titleSeach.'%');
        });
        $query->when($filters['city'] ?? false, function($query, $citySeach){
            return $query->where('city', 'like', '%'.$citySeach.'%');
        });
        $query->when($filters['category'] ?? false, function($query, $categorySeach){
            return $query->whereHas(
                'category',
                fn($query) => $query->where('slug', $categorySeach));
        });
        $query->when($filters['author'] ?? false, function($query, $authorSeach){
            return $query->whereHas(
                'author',
                fn($query) => $query->where('username', $authorSeach));
        });
    }
}

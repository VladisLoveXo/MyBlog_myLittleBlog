<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function category()
{
    return $this->belongsTo(Category::class);
}

public function author()
{
    return $this->belongsTo(Author::class);
}
}
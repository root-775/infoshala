<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    public $fillable = ['title', 'blog_by', 'short_desc', 'long_desc', 'is_active', 'category_id', 'tag_id'];

    public function category(){
        return $this->hasMany(Category::class, 'id', 'category_id');
    }
    public function tag(){
        return $this->hasMany(Tag::class, 'id', 'tag_id');
    }

    public function getSlugAttribute(){
        return Str::slug($this->title);
    }
}

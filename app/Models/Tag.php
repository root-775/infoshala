<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public $fillable = ['name', 'active'];

    public function getSlugAttribute(){
        return Str::slug($this->title);
    }
}

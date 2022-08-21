<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory;
    protected $fillable = ["slug", "name", "description"];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function trees(){
        $this->hasMany(Tree::class);
    }
    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }
    public function posts(){
        return $this->morphMany(Post::class, "postable");
    }
}

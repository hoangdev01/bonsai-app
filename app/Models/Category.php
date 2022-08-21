<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ["slug", "name", "description", "type_id"];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function trees()
    {
        return $this->belongsToMany(Tree::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class, "imageable");
    }
    public function posts()
    {
        return $this->morphMany(Post::class, "postable");
    }
}

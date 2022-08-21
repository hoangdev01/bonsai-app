<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;
    protected $fillable = ["slug", "name", "description", "material"];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function pots()
    {
        return $this->belongsToMany(Pot::class);
    }
    public function posts()
    {
        return $this->morphMany(Post::class, "postable");
    }
}

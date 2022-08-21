<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use HasFactory;
    protected $fillable = ["code", "name", "description", "height", "birth", "starting_price", "special_point", "pot_id", "special_id", "pending_style_id"];
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function species(){
        return $this->belongsTo(Species::class);
    }
    public function pendingStyle(){
        return $this->belongsTo(PendingStyle::class);
    }
    public function pot(){
        return $this->hasOne(Pot::class);
    }

    public function orderDetail(){
        return $this->morphMany(OrderDetail::class, "productable");
    }
    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }
    public function posts(){
        return $this->morphMany(Post::class, "postable");
    }
    public function tags(){
        return $this->morphMany(Tag::class, "tagable");
    }
}

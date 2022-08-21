<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pot extends Model
{
    use HasFactory;
    protected $fillable = ["code", "name", "description", "status", "price", "color", "height", "width", "type_id", "amount"];
    public function tree(){
        $this->hasOne(Tree::class);
    }
    public function type(){
        $this->belongsTo(Type::class);
    }
    public function designs(){
        $this->belongsToMany(Design::class);
    }
    
    public function orderDetails(){
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

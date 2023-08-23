<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "desc",
        "eleve_id"
    ];

    public function eleve(){
        return $this->belongsTo(Eleve::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}

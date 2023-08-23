<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        "desc",
        "eleve_id",
        "post_id",
    ];

    public function eleve(){
        return $this->belongsTo(Eleve::class);
    }
    
    public function post(){
        return $this->belongsTo(Post::class);
    }
}

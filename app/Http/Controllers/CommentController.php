<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request ,Post $poste){
        request()->validate([
            "desc" => ["required"],
            "eleve_id" => ["required"],
        ]);

        $data = [
            "desc" => $request->desc,
            "eleve_id" => $request->eleve_id,
            "post_id" => $poste->id,
        ];
        
        Comment::create($data);
        return redirect()->back()->with("success" , "ton commentaire a été poster");
    }

    public function destroy(Comment $comment){
        $comment->delete();
        return redirect()->back()->with("warning" , "tu viens de supprimer ton commentaire");
    }
}

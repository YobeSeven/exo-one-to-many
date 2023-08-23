<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Eleve;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $postes = Post::all();
        $eleves = Eleve::all();
        return view("backend.postes" , compact("postes" , "eleves"));
    }
    public function store(Request $request){
        request()->validate([
            "eleve_id" => ["required"],
            "name" => ["required"],
            "desc" => ["required"],
        ]);

        $data = [
            "name" => $request->name,
            "desc" => $request->desc,
            "eleve_id" => $request->eleve_id,
        ];
        Post::create($data);

        return redirect()->back()->with("success" , "ton poste a été créer");
    }

    public function destroy(Post $poste){
        Comment::where("post_id" , $poste->id)->delete();
        $poste->delete();
        return redirect()->back()->with("warning" , "tu viens de supprimer ton poste");
    }
}

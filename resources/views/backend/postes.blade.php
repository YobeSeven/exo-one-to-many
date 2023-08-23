@extends("layouts.index")
@section('content')
<h1>POSTES :</h1>
    @foreach ($postes as $poste)
        <h1>TITRE : {{$poste->name}} / {{$poste->id}}</h1>
        <h1>POSTE : {{$poste->desc}}</h1>
        <h1>AUTOR : {{$poste->eleve->name}}</h1>
        <form action="{{route("postes.destroy",$poste->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Delete Poste</button>
        </form>
        @include("backend.components.comments")
        @foreach ($poste->comments as $comment)
            <h1>Commentaire :{{$comment->desc}}</h1>
            <h2>Fait par : {{$comment->eleve->name}}</h2>
            <form action="{{route("comments.destroy" , $comment->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger" type="submit">Delete commentaire</button>
            </form>
        @endforeach
        <hr>
        <hr>
    @endforeach
@endsection
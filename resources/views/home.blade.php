@extends("layouts.index")
@section("content")
    <h1 class="text-danger">Hello home</h1>

    <form action={{route("postes.store")}} method="POST">
        @csrf
        <select name="eleve_id" id="eleve_id" required>
            <option disabled selected>Choisis un eleve</option>
            @foreach ($eleves as $eleve)
                <option value={{$eleve->id}}>{{$eleve->name}}</option>                
            @endforeach
        </select>
        <div>
            <label for="name">Choisis le nom de ton poste</label>
            <input type="text" name="name" id="name" value="{{old("name")}}" required>
        </div>
        <div>
            <label for="desc">Ecris ton poste</label>
            <textarea name="desc" id="desc" cols="30" rows="10" required>{{old("desc")}}</textarea>
        </div>
        <button type="submit">Ajouter un poste</button>
    </form>
@endsection

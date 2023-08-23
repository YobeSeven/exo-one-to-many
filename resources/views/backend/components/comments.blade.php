<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comments{{$poste->id}}">
    Mettre un commentaire
</button>

<!-- Modal -->
<div class="modal fade" id="comments{{$poste->id}}" tabindex="-1" aria-labelledby="comments{{$poste->id}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="comments{{$poste->id}}Label">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route("comments.store" , $poste->id)}}" method="POST">
                    @csrf
                    <select name="eleve_id" id="eleve_id" required>
                        <option disabled selected>Choisis un eleve</option>
                        @foreach ($eleves as $eleve)
                            <option value={{$eleve->id}}>{{$eleve->name}}</option>                
                        @endforeach
                    </select>
                    <div>
                        <label for="desc">Commentaire</label>
                        <textarea name="desc" id="desc" cols="30" rows="10" required>{{old("desc")}}</textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Mettre un commentaire</button>
                </form>
            </div>
        </div>
    </div>
</div>

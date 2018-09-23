<form action="{{ route('update_marque',['id' => $marque->id]) }}" method="POST">
<label>nom</label>
<input type="text" name="nom" value="{{$marque->nom}}">
<br>
<label>référence</label>
<input type="text" name="refrerence" value="{{$marque->refrerence}}">
<br>

<label>model</label>
<input type="text" name="id_model"  value="{{$marque->id_model}}">
<br>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" value="modfier">
</form>
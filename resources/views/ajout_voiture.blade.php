<form action="{{ route('ajout_marque') }}" method="POST" enctype="multipart/form-data">
<label>nom</label>
<input type="text" name="nom">
<br>
<label>référence</label>
<input type="text" name="refrerence">
<br>

<label>model</label>
<input type="text" name="id_model">
<br>
<label>picture</label>
<input type="file" name="file" id="file">

<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" value="ajout">
</form>
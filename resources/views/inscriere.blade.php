@extends('app')

@section('content')
<div class="border-inscriere">
	<h2 class="text-incriere">Inscrie-te si castiga</h2>

	<form action="/inscriere" data-form="true" method="post">
	    <label for="nume" class="forlabel numelabel">Nume</label>
	    <input type="text"  value="{{ old('nume') }}" data-nume="true" name="nume" class="form-control numebox">

		<label for="email" class="forlabel emaillabel">Email</label>
		<input type="email" value="{{ old('email') }}" data-email="true" name="email" class="form-control emailbox">
		
		<label for="telefon" class="forlabel telefonlabel">Telefon</label>
		<input type="tel" value="{{ old('telefon') }}" data-telefon="true" name="telefon" class="form-control telefonbox">

		<label for="codcartus" class="forlabel cartuslabel">Cod cartus</label>
		<input type="text" value="{{ old('codcartus') }}" data-codcartus="true" name="codcartus" class="form-control cartusbox">

		<input type="checkbox" class="checkbox2" name="contact" data-checkbox="true" value="1" checked="checked"> 
		<h2 class="checkbox3">Accept sa fiu contactat de Canon</h2>
	    
	    <button type="submit" data-buton="true" class="btn-trimite">Ma inscriu</button>
	</form>
</div>
@endsection

@section('js')
<script src="/js/entry/form.js"></script>
@endsection
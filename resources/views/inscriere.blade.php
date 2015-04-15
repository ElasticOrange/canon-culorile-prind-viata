@extends('app')

@section('content')
<div class="border-inscriere">
	<h2 class="text-incriere">Înscrie-te şi câştigă</h2>

	<form action="/inscriere" data-form="true" method="post">
	    <label for="nume" class="forlabel numelabel">Nume și Prenume</label>
	    <input type="text"  value="{{ old('nume') }}" data-nume="true" name="nume" class="form-control numebox">

		<label for="email" class="forlabel emaillabel">Adresă de mail</label>
		<input type="email" value="{{ old('email') }}" data-email="true" name="email" class="form-control emailbox">
		
		<label for="codcartus" class="forlabel cartuslabel">Codul consumabilului tău</label>
		<input type="text" value="{{ old('codcartus') }}" data-codcartus="true" name="codcartus" class="form-control cartusbox">

		<input type="checkbox" class="checkbox2" name="contact" data-checkbox="true" value="1" checked="checked"> 
		<h2 class="checkbox3">Doresc să fiu contactat de către Canon România</h2>
		<h2 class="steluta">* Pentru validarea premiului, păstrează dovada plătii consumabilului tău.</h2>
	    
	    <button type="submit" data-buton="true" class="btn-trimite">TRIMITE</button>
	</form>
	<div class="invizibil">
		<img src="/img/bulina_diagrame.png" />
	    <h3 class="felicitari">Felicitări! Te-ai înscris în cursa pentru a câștiga premiile noastre! 
	    Urmărește pagina noastră de Facebook și află dacă ești unul dintre câstigători</h3>
	</div>
</div>
@endsection

@section('js')
<script src="/js/entry/form.js"></script>
@endsection
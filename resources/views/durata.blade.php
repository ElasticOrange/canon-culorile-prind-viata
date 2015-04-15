@extends('app')

@section('content')
<div class="durata">
	<div class="slider">
		<div class="sageata2">
			<img src="/img/mutasidescoperadurata.png" />
		</div>
		<span class="sly2">0 ani</span>
	</div>

	<div class="cerc-durata-inceput">
		<img src="/img/cerc-colors.png" />
		<h3 class="cerc-text2"> Îți dorești ca echipamentele tale să reziste mai mult în timp?</h3>
	</div>

	<div class="cerc-durata-final">
		<img src="/img/cerc-colors.png" />
		<h3 class="cerc-text-durata-final">Felicitări! Ai descoperit avantajele consumabilelor Canon! Înscrie în concurs codul consumabilului tău și câștigă multe premii!</h3>
		<a href="/inscriere">
			<h3 class="text-buton-cerc">Mai departe</h3>
			<img class= "buton-cerc" src="/img/homebuton.png" />
		</a>
	</div>

</div>
<div class="nevoie"></div>

<script>
$('.slider').slider({
	range: true,
	min: 0,
	max: 90,
	value: 1,
    slide: handleSliderChange
});

function handleSliderChange(event, slider){
	$(".sageata2").css('left', slider.value + '%');
	$(".sly2").text(slider.value*3+30 + " ani");
	$(".sly2").css('left', slider.value + '%');
	$(".nevoie").css('opacity', slider.value/100+0.10);

	if (($(".nevoie").css('opacity') >= '0.15') && ($(".nevoie").css('opacity') <= '0.25'))
	{
		return $(".cerc-durata-inceput").hide();
	}
	else if ($(".nevoie").css('opacity') >= '0.9') 
	{
		return $(".cerc-durata-final").show();
	}
}
</script>
@endsection
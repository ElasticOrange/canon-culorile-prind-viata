@extends('app')

@section('content')
<div class="durata">
	<div class="slider">
			<div class="sageata">
				<img src="/img/mutasidescoperadurata.jpg" />
			</div>
	</div>

	<div class="cerc-durata">
		<img src="/img/cerc-colors.png" />
		<h3 class="cerc-text2">Consumabilele Canon oferă durată materialelor</h3>
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
	$(".sageata").css('left', slider.value + '%');
	// $(".sageata").text(slider.value*3+30 + 'ani');
	$(".nevoie").css('opacity', slider.value/100+0.10);

	if (($(".nevoie").css('opacity') >= '0.15') && ($(".nevoie").css('opacity') <= '0.25'))
	{
		return $(".cerc-durata").hide();
	}
	else if ($(".nevoie").css('opacity') >= '0.9') 
	{
		return $(".cerc-durata").show();
	}
}
</script>
@endsection
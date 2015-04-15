@extends('app')

@section('content')
<div class="colorstop">
	<div class="slider">
		<div class="sageata">
			<img src="/img/sageata-slider2.png" />
		</div>
		<span class="sly">0%</span>
	</div>
	
	<div class="ascuns">
	</div>

	<div class="cerc-colors-inceput">
		<img src="/img/cerc-colors.png" />
		<h3 class="cerc-text-colors">Îți dorești culori intense?</h3>
	</div>


	<div class="cerc">
		<img src="/img/cerc-colors.png" />
		<h3 class="cerc-text-original">Consumabilele originale Canon oferă culori intense</h3>
		<a href="/sharpness">
			<h3 class="text-buton-cerc">Mai departe</h3>
			<img class= "buton-cerc" src="/img/homebuton.png" />
		</a>
	</div>
</div>
<script>
$('.slider').slider({
	range: true,
	min: 0,
	max: 95,
	value: 1,
    slide: handleSliderChange
});

function handleSliderChange(event, slider){
	$(".sageata").css('left', slider.value + '%');
	$(".sly").css('left', slider.value + '%');
	$(".sly").text(slider.value+5 + "%");
	$(".ascuns").css('opacity', slider.value/100+0.05);

	if (($(".ascuns").css('opacity') >= '0.15') && ($(".ascuns").css('opacity') <= '0.25'))
		{
			$(".cerc-colors-inceput").hide();
		}
		else if ($(".ascuns").css('opacity') >= '0.9')
		{
			$(".cerc").show();
		}
}
</script>
@endsection
@extends('app')

@section('content')
<div class="sharp">
	<div class="slider">
			<div class="sageata">
				<img src="/img/mutasidescoperacalitatea.png" />
			</div>
	</div>
	
	<div class="ascuns2"></div>

	<div class="cerc-sharp-inceput">
		<img src="/img/bulina_diagrame.png" />
		<h3 class="cerc-text2-inceput">Îți dorești materiale de calitate?</h3>
	</div>

	<div class="cerc-sharp">
		<img src="/img/bulina_diagrame.png" />
		<h3 class="cerc-text2">Consumabilele Canon oferă calitate materialelor</h3>
		<a href="/durata">
			<h3 class="text-buton-cerc">Mai departe</h3>
			<img class= "buton-cerc" src="/img/homebuton.png" />
		</a>
	</div>
	
</div>

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
          $(".ascuns2").css('opacity', slider.value/100+0.10);

          if (($(".ascuns2").css('opacity') >= '0.15') && ($(".ascuns2").css('opacity') <= '0.25'))
          	{
          		return $(".cerc-sharp-inceput").hide();
          	}
          	else if ($(".ascuns2").css('opacity') >= '0.9')
          	{
          		return $(".cerc-sharp").show();
          	}
}
</script>
@endsection
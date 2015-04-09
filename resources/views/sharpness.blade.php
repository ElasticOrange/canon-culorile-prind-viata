@extends('app')

@section('content')
<div class="sharp">
	<div class="slider">
			<div class="sageata">
				<img src="/img/mutasidescoperacalitatea.jpg" />
			</div>
	</div>
	
	<div class="ascuns2"></div>

	<div>
		<h2 class="materiale-calitate">Îți dorești materiale de calitate ?</h2>
	</div>

	<div class="cerc-sharp">
		<img src="/img/bulina_diagrame.png" />
		<h3 class="cerc-text">Cartusele originale au calitate</h3>
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

          if ($(".ascuns2").css('opacity') >= '0.95') 
          	{
          		return $(".cerc-sharp").show();
          	}
          	else if ($(".ascuns2").css('opacity') >= '0.15')
          	{
          		return $(".materiale-calitate").hide();
          	};
}
</script>
@endsection
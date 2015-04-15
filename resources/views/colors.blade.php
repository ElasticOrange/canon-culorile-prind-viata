@extends('app')

@section('content')
<div class="colorstop">
	<div class="slider">
			<div class="sageata">
				<img src="/img/sageata-slider2.png" />
			</div>
	</div>
	
	<div class="ascuns">
	</div>

	<div>
		<h2 class="culori-intense">Îți dorești culori intense ?</h2>
	</div>

	<div class="cerc">
		<img src="/img/cerc-colors.png" />
		<h3 class="cerc-text">Consumabilele Canon au culori intense</h3>
		<a href="/sharpness">
			<h3 class="text-buton-cerc">Mai departe</h3>
			<img class= "buton-cerc" src="/img/homebuton.png" />
		</a>
	</div>
</div>
<!-- .css('width', slider.value/100*465+235 + 'px') -->
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
          $(".ascuns").css('opacity', slider.value/100+0.05);

          if ($(".ascuns").css('opacity') >= '0.95') 
          	{
          		return $(".cerc").show();
          	}
          	else if ($(".ascuns").css('opacity') >= '0.15')
          	{
          		return $(".culori-intense").hide();
          	}
}
</script>
@endsection
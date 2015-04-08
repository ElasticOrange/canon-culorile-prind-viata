@extends('app')

@section('content')
<div class="colorstop">
	<img src="/img/colorstop.png" />
	<div class="slider">
		<div id="slider2">
			<div class="sageata">
				<img src="/img/sageata-slider.png" />
			</div>
		</div>
	</div>
	
	<div class="colorata" id="ascuns">
		<img src="/img/colorata.png" />
	</div>

	<div class="cerc">
		<img src="/img/cerc-colors.png" />
		<h3 class="cerc-text">Cartusele originale au culori intense</h3>
		<a href="#">
			<h3 class="text-buton-cerc">Mai departe</h3>
			<img class= "buton-cerc" src="/img/homebuton.png" />
		</a>
	</div>
</div>

<script>
$('#slider2').slider({
	range: true,
	min: 0,
	max: 100,
	value: 1,
    slide: handleSliderChange
});

function handleSliderChange(event, slider){
          $(".sageata").css('left', slider.value + '%');
          $("#ascuns").css('width', slider.value/100*465+235 + 'px');
          if ($("#ascuns").css('width') >= '690px') 
          	{
          		return $(".cerc").show();
          	};
}
</script>
@endsection
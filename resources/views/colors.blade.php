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
}
</script>
@endsection
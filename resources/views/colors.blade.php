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
</div>

<script>
$('#slider2').slider({
	range: "min",
	min: 1,
	max: 99,
	value: 0,
    slide: handleSliderChange
});

function handleSliderChange(event, slider){
          $(".sageata").css('left', slider.value + '%');
}
</script>
@endsection
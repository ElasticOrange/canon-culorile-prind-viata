@extends('app')

@section('content')


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
          	};
}
</script>
@endsection
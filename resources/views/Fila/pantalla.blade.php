@extends('layouts.refresh')

@section('content')
<div class="grid grid-rows-3 grid-flow-col gap-4 m-20 " id="feedback-bg-info">
  <div class="row-span-3 border">
    <div class="text-xs font-medium text-gray-500 uppercase border">
        @foreach ($atendidos as $item)
			<div class="text-xl text-center font-large">{{$item ->turnNumber}}</div>
            <div>{{$item ->name}}</div>
            <div>{{$item ->description}}</div>
            <div>Caja {{$item ->numberTeller}}</div>
            
		@endforeach
    </div>
  </div>
  <div class="col-span-2 border">
  <div class="text-xs font-medium text-gray-500 uppercase border">
       @if ($enTurno != "")
			<div class="text-xl text-center font-large">{{$enTurno ->turnNumber}}</div>
            <div>{{$enTurno ->name}}</div>
            <div>{{$item ->description}}</div>
            <div>Caja {{$enTurno ->numberTeller}}</div>
       @endif
  </div>
  </div>
  <div class="row-span-2 col-span-2 border">
  <div class="text-xs font-medium text-gray-500 uppercase border">
        @foreach ($turnos as $item)
			<div class="text-xl text-center font-large">{{$item ->turnNumber}}</div>
            <div>{{$item ->name}}</div>
		@endforeach
  </div>
  </div>
</div>


<script>
$(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#feedback-bg-info').load('pantalla.php');//actualizas el div
   }, 1000 );
});

</script>

@endsection

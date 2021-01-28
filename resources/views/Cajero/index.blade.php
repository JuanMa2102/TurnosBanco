@extends('layouts.template')
@section('title', 'Cajeros')

@section('nav')
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Cajeros') }}
</h2>
{{-- <input type="button" onclick="{{route('cajeros.create')}}" name="" id=""> --}}
        {{-- @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="mr-2 text-sm text-gray-700 underline">Nuevo cajero</a>
        @endif --}}
@endsection
@section('email')
<div>{{$nameAdmin}}</div>
@endsection

@section('content')

<div class="grid grid-rows-3 grid-flow-col gap-4 mt-20 mx-80">   
        <form method="POST" action="{{ route('empleado-caja') }}">
            @csrf

            <select id="caja" name="caja" class="block mt-1 w-full appearance-none">
            @foreach ($tellers as $caja)
				<option value="{{$caja->id}}">Caja {{$caja ->numberTeller}}</option>
			@endforeach
            </select>
            <div class="items-center mt-4">
                

            <div class="mt-10">
				<button class="w-full uppercase px-8 py-2 border border-blue-600 text-blue-600 shadow-sm hover:shadow-lg">SELECCIONAR CAJA
			</button>
                
                <div>
               

               
                </div>
            </div>
        </form>
</div>
@endsection
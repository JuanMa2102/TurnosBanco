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
<div class="h-64 grid grid-rows-3 grid-flow-col gap-4 mt-10">
  <div></div>
  <div></div>
  <div></div>
  <div class="text-center">
  <label>Atendiendo</label><br>
  <label>{{$folio}}</label></div>
  <div class="text-center">
        
        <a href="{{route('turno-cliente') }}" class="w-full uppercase px-8 py-2 border border-blue-600 text-blue-600 shadow-sm hover:shadow-lg">Turno Siguiente</a>
        
  </div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>   
@endsection
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
    
@endsection
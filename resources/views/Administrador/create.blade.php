@extends('layouts.template')
@section('title', 'Nuevo Cajero ')



@section('content')
    <a href="{{route('cajeros.index')}}">Cajeros</a>
    <div>
        <form action="{{route('cajeros.store')}}" method="POST">
            <label for="">
                Nombre:
                <input type="text" name="name">
            </label>
            <label for="">
                Email:
                <input type="email" name="email">
            </label>
            <label for="">
                Contraseña:
                <input type="password" name="password">
            </label>
        </form> 
    </div>        
@endsection
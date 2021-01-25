
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <p>Soy un Nav</p>
    </nav>    
    @yield('content')
    
</body>
</html> --}}
<x-app-layout>
    <x-slot name="header">
        @yield('nav')
    </x-slot>
    @yield('content')

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
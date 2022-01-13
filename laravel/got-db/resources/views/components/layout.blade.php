<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'GoT-DB' }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<header>
    <div class="py-4">
        <div class="max-w-md mx-auto">
            <a href="/">
                <img class="invert hover:opacity-50" src="{{asset('assets/logo.png')}}" alt="GoT logo">
            </a>
        </div>
        <br>
        @unless($hidemenu ?? false)
            <ul class="flex max-w-lg mx-auto justify-around text-white text-center font-semibold uppercase text-sm font-['GoT']">
                <a  class="hover:text-got-300"
                    href="{{ route('characters') }}">
                    <li>Characters</li>
                </a>
                <a class="hover:text-got-300"
                   href="{{ route('houses') }}">
                    <li>Houses</li>
                </a>
                <a class="hover:text-got-300"
                    href="{{ route('events') }}">
                    <li>Events</li>
                </a>
            </ul>
        @endif
    </div>
</header>

<body class="bg-got-500 px-4">
{{ $slot }}
</body>

</html>

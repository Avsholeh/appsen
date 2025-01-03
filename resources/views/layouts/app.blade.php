<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        @include('partials.navbar')
    </header>
    <main class="py-4 px-3">
        @yield('content')
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('script')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Krush Burger</title>

    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

    @yield('header_styles')

</head>
    <body>
        @include('layouts._header')

        @yield('content')

        @include('layouts._footer')

        <script src="{{ elixir('js/app.js') }}"></script>

        @yield('footer_scripts')

    </body>
</html>






















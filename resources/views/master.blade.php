<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script>
                window.Laravel = <?php echo json_encode([
                    'csrfToken' => csrf_token(),
                ]); ?>
        </script>
    </head>
    <body class="animsition">
        <div id="app" class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        @yield('footer')
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>@yield('page_title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="manifest" href="{{ asset('vendor/Devi/admin/assets/images/favicon/manifest.json') }}">

        <link rel="stylesheet" href="{{ asset('vendor/Devi/ui/assets/css/ui.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/Devi/admin/assets/css/admin.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        @yield('head')

        @yield('css')
        @stack('css')

    </head>

    <body style="scroll-behavior: smooth;">
        <div id="app">
            @yield('content-wrapper')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('vendor/Devi/admin/assets/js/admin.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/Devi/ui/assets/js/ui.js') }}"></script>

        <div class="modal-overlay"></div>
    </body>
</html>

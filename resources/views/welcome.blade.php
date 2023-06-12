<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>ST Hosting</title>
</head>

<body class="bg-secondary">
    <div class="container bg-light">
        {{-- NAV --}}
        @include('layouts.nav')
        {{-- END NAV --}}

        {{-- HEADER --}}
        @include('layouts.header')
        {{-- END HEADER --}}

        {{-- ABOUT US --}}
        @include('layouts.about')
        {{-- END ABOUT US --}}

        {{-- TEAM --}}
        @include('layouts.team')
        {{-- END TEAM --}}

        {{-- PRODUCTS --}}
        @include('layouts.product')
        {{-- END PRODUCTS --}}

        {{-- CONTACT --}}
        @include('layouts.contact')
        {{-- END CONTACT --}}

        {{-- FOOTER --}}
        @include('layouts.footer')
        {{-- END FOOTER --}}
    </div>

    <script src="{{ asset('js/icon.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src='{{ asset('js/sweetalert.min.js') }}'></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

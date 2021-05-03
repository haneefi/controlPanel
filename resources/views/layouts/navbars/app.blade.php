<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Argon Dashboard') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('public/argon') }}/img/brand/favicon.png?v=1" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('public/argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('public/argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('public/argon') }}/css/argon.css?v=1.0.1" rel="stylesheet">
    </head>
    <body class="{{ $class ?? '' }}">
        @if(session()->has('admin_id'))
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
        @endif
        @if(session()->has('admin_id'))
        <div class="main-content">
            @include('layouts.navbars.navbar')
            @yield('content')
        </div>
        @endif
        @guest()
            @include('layouts.footers.guest')
        @endguest

        <script src="{{ asset('public/argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('public/argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"  rel="stylesheet" >
        <link href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css"  rel="stylesheet" >

        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tableX').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    orderable: false,
                    pageLength: 50
                } );
            });
        </script>

        @stack('js')


        <!-- Argon JS -->
        <script src="{{ asset('public/argon') }}/js/argon.js"></script>
    </body>
</html>

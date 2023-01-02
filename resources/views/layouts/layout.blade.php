<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap5.min.css')}}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .text-right {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <header class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="{{url('/')}}" class="nav-link active" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="{{url('customer-info')}}" class="nav-link">Customer Info</a></li>
                    <li class="nav-item"><a href="{{url('sales')}}" class="nav-link">Sales</a></li>
                    <li class="nav-item"><a href="{{url('service/history')}}" class="nav-link">History Services</a></li>
                    <li class="nav-item"><a href="{{url('repair/history')}}" class="nav-link">History Repairs</a></li>
                </ul>
            </header>
            @yield('content')
        </div>    
    </body>
    <script src="{{'assets/js/bootstrap5.js'}}"></script>
    <script src="{{'assets/js/jquery/jquery.min.js'}}"></script>
</html>

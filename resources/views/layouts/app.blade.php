<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" 
    href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- datatables js-->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.navbar')
    <div class="container-fluid">

        <div class="row mt-1">
            <div class="col-md-2">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-10">
                @include('layouts.breadcrumb')
                @yield('content')
            </div>
        </div>
    </div>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>

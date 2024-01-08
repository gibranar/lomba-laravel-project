<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

    {{-- cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />



    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    {{-- Header Start --}}
    <div class="wrapper d-flex align-items-stretch">
        <header class="header" id="header">
            <div class="header_toggle">
                <i class="bx bx-menu" id="header-toggle"></i>
            </div>
            <div class="dropdown" style="display: flex; align-items: center; gap: 8px;">
                    <div class="header_img" style="width: 40px;"  id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="https://i.imgur.com/hczKIze.jpg" alt="" />
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px;"  height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
             
                <ul class="dropdown-menu mt-4 ms-4" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
           
        </header>
        @include('layouts.sidebar')
        <div class="height-100 bg-light">
            @yield('content')
        </div>

    </div>
    {{-- Header End  --}}

    {{-- Content Start --}}

    {{-- Content End --}}





    {{-- JS Start --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- JS End --}}
</body>

</html>

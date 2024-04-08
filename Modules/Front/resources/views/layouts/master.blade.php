<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>IRTree</title>

    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="{{ $author ?? '' }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/my_style.css">
    <link rel="shortcut icon" href="/storage/img_core/icons8-flower-48.png" />
    @vite('Modules/Front/resources/assets/css/app.css')
</head>

<body>
    <div id="app">
        @if (session('error-msg'))
            <div class="msg-rdirect px-4 py-2 rounded-3 shadow my-select-none my-f-12 my-font-IYM my-btn-r" dir="rtl">
                {{session('error-msg')}}
            </div>
        @endif
        @if (session('ok-msg'))
            <div class="msg-rdirect px-4 py-2 rounded-3 shadow my-select-none my-f-12 my-font-IYM my-btn-g" dir="rtl">
                {{session('ok-msg')}}
            </div>
        @endif
        <div class="container-fluid box-shape">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
</body>
@vite('Modules/Front/resources/assets/js/app.js')

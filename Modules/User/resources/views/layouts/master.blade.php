<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Panel User</title>

    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="{{ $author ?? '' }}">
    <link rel="stylesheet" href="/css/my_style.css">
    <link rel="shortcut icon" href="/storage/img_core/icons8-flower-48.png" />
    @vite('Modules/User/resources/assets/css/app.css')
</head>

<body>
    @auth()
        <div class="container-fluid box-shape">
            <div class="row p-2 p-md-5" style="height: 100vh">
                <div style="transition: 0.5s" class="col-12 row col-md-10 shadow rounded-start order-1 order-md-0 p-2">
                    @yield('content')
                </div>
                <div class="col-12 col-md-2 shadow rounded-end order-0 order-md-1 p-2">
                    <div class="d-flex flex-column border-bottom  justify-content-center align-items-center">
                        <img src="{{auth()->user()->img}}" style="border-radius: 50%" width="100" height="100" alt="page-">
                        <div class="my-2 my-font-IYB my-f-16 my-color-g">{{auth()->user()->name}}</div>
                        <div class="my-2 my-font-IYL my-f-13 my-color-b-500">{{auth()->user()->email}}</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <a class="d-block w-100 text-center my-2 item-menu-user my-font-IYL my-color-b-900 my-f-13 p-2" href="{{route('user.dashboard')}}">
                            <span class="">صفحه اصلی</span>
                        </a>
                        <a class="d-block  w-100 text-center my-2 item-menu-user my-font-IYL my-color-b-900 my-f-13 p-2" href="{{route('user.view.cart')}}">
                            <span class="">سبد خرید </span>
                        </a>
                        <a class="d-block  w-100 text-center my-2 item-menu-user my-font-IYL my-color-b-900 my-f-13 p-2" href="/">
                            <span class="">کامنت ها </span>
                        </a>
                        <a class="d-block w-100 text-center my-2 item-menu-user my-font-IYL my-color-b-900 my-f-13 p-2" href="/">
                            <span> نشان شده </span>
                        </a>
                        <a class="d-block  w-100 text-center my-2 item-menu-user my-font-IYL my-color-b-900 my-f-13 p-2" href="/">
                            <span class=""> فاکتئور ها</span>
                        </a>
                        <a class="d-block  w-100 text-center my-2 item-menu-user my-font-IYL my-color-b-900 my-f-13 p-2" href="/">
                            <span class=""> گزارش محصول</span>
                        </a>
                        <a class="d-block w-100  text-center my-2 item-menu-user my-font-IYL my-color-b-900 my-f-13 p-2" href="/">
                            <span class=""> پشتیبانی</span>
                        </a>
                        <a class="d-block  w-100 text-center my-2 item-menu-user my-font-IYL my-color-b-900 my-f-13 p-2" href="/">
                            <span class=""> رای گیری</span>
                        </a>
                        <a class="d-block  w-100 text-center my-2 item-menu-user item-menu-user-exit my-font-IYL my-color-b-900 my-f-13 p-2" href="{{route('logout')}}">
                            <span class=""> خروج</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endauth
</body>
@vite('Modules/User/resources/assets/js/app.js')

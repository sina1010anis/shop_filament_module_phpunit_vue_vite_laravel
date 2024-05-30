<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div id="app">
            <div style="width: 100%;height: 100vh; background-color: rgb(0, 0, 0)">
                <b><p align="center" id="timer" style="font-size: 350px;color:#b7b7b7;">Timer</p></b>
            </div>
        </div>
    </body>

    @vite('resources/js/app.js')

</html>

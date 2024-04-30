<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <div id="app">
        <div class="w-100 d-flex justify-content-center align-items-center" style="height: 100vh">
            <button class="btn btn-danger m-3" @click="btn_send('Danger')">Danger Button --<span>0</span>--</button>

            <button class="btn btn-info m-3" @click="btn_send('Info')">Info Button --<span>0</span>--</button>

            <button class="btn btn-success m-3" @click="btn_send('Success')">Success Button --<span>0</span>--</button>

            <button class="btn btn-warning m-3" @click="btn_send('Warning')">Warning Button --<span>0</span>--</button>

        </div>
        <form action="{{route('reverb')}}" method="post">
            @csrf
            <button type="submit">Send</button>
        </form>
    </div>
    @vite('resources/js/app.js')

</body>
</html>

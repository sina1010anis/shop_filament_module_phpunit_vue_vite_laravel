<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revern Input</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app">

        <div class="form-group p-2">
            <input type="email" v-model="value_msg" class="form-control" id="input_message" placeholder=" Message">
        </div>

        <button @click="btn_send_msg" class="btn btn-info">Send Message</button>

    </div>
</body>
@vite('resources/js/app.js')

</html>

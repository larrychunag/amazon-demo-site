<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EC Demo</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="content">
        <div id="app">
            <div>
                <router-link to="/">Home</router-link>
                <router-link to="/about">About</router-link>
            </div>
            <router-view />
        </div>
    </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>

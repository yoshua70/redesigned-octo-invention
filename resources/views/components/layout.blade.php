<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'pwd' }}</title>

        <!-- Styles -->
        <link type="text/css" href="css/app.css" rel="stylesheet">

        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/1e0d5bb052.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="bg-white drop-shadow-sm py-4 px-4">
            <x-navbar/>
        </div>
        <div>
            {{ $slot }}
        </div>
    </body>
</html>

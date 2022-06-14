<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'pwd' }}</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

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

 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{env('APP_NAME')}}</title>
        <link rel="icon" type="image/x-icon" href="/img/logo/logo4.png">
    </head>
    <body>
        <x-navbar/>
        <div class="container separator">
        {{$slot}}
        </div>
        <x-footer/>
    </body>
    </html>

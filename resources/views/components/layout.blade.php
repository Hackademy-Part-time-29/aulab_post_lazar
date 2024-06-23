<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{env('APP_NAME')}}</title>
    </head>
    <body>
        <x-navbar/>
        <div class="separator"></div>
        <div class="container">
        {{$slot}}
        </div>
    </body>
    </html>
</div>
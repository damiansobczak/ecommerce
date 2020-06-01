<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Strona główna</title>

        <link rel="stylesheet" href="{{ asset('css/styles.css')}}" type="text/css" />

        <!-- 
            Only for development purpose
            Preload on production
        -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
        @component('components.menu')
            
        @endcomponent

        @component('components.slider')
            
        @endcomponent

        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>

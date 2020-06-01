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
            @slot('title')
                Panele fotowoltaniczne <b>w najlepszej cenie</b>
            @endslot
            @slot('text')
                darmowy montaż
            @endslot
            @slot('image')
                {{ asset('images/panel.png')}}
            @endslot
        @endcomponent

        @component('components.feature')
            @slot('price')
                1499,99zł
            @endslot
            @slot('image')
                {{ asset('images/panel.png') }}
            @endslot
            @slot('title')
                SPR-MAX3-400
            @endslot
            @slot('desc')
                Panele fotowoltaniczne z gwarancją na produkt 25 lat.
            @endslot
            @slot('link')
                #
            @endslot
        @endcomponent

        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>

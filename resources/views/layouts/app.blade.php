<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>
            @if (!empty($title))
                {{ $title }}
            @else
                Titolo base - Mio Ecommerce
            @endif
        </title>
    </head>
    <body>
        @yield('content')
    </body>
</html>

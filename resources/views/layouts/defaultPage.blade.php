<?php 
$footer_rows = config('footer_rows');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    @yield('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('pageTitle')</title>
</head>
<body>
    <header>
        <img class="logo" src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo Molisana">
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">Prodotti</a></li>
            <li><a href="#">News</a></li>
        </ul>
    </header>
    @yield('main')
    <footer>
        <div class="container">
            @for ( $i = 0; $i < count($footer_rows); $i++ )
                <div class="footer__wrapper" >
                    @if ( $footer_rows[$i]['title'] === false )
                        <img src= {{ $footer_rows[$i]['img'] }} >
                    @else 
                        <h3>{{ $footer_rows[$i]['title'] }}</h3>
                    @endif
                    <ul>
                        @if ( $footer_rows[$i]['title'] === false )
                            @for ( $j = 0; $j < count($footer_rows[$i]['elems']); $j++)
                                <li>{{ $footer_rows[$i]['elems'][$j] }}</li>
                            @endfor
                        @else
                            @for ( $j = 0; $j < count($footer_rows[$i]['elems']); $j++)
                                <li class="footer__link"><a href= {{ $footer_rows[$i]['elems'][$j]['href'] }}>{{ $footer_rows[$i]['elems'][$j]['text'] }}</a></li>
                            @endfor
                        @endif
                    </ul>
                </div>
            @endfor
        </div>
    </footer>
    @yield('script')
</body>
</html>
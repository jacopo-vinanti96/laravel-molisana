<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Le Molisana - Prodotti</title>
</head>
<body>
    <header>
        <img class="logo" src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo Molisana">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a class="active" href="#">Prodotti</a></li>
            <li><a href="#">News</a></li>
        </ul>
    </header>
    <main>
        <div class="container">
            @for ($i = 0; $i < count($types); $i++)
                <h2>{{ $types[$i]['title'] }}</h2>
                <ul class="products_template">
                    @for ($j = 0; $j < count($types[$i]['elems']); $j++)
                        <li>
                            <img class="product" src= {{ $types[$i]['elems'][$j]['src'] }} alt= {{ $types[$i]['elems'][$j]['titolo']}}>
                        </li>
                    @endfor
                </ul>
            @endfor
        </div>
    </main>
    <footer>
        <div class="container">
            @for ( $i = 0; $i < count($footer_rows); $i++ )
                <img src= {{ $footer_rows[$i]['img'] }} >
                <ul>
                    @for ( $j = 0; $j < count($footer_rows[$i]['elems']); $j++)
                        <p> CIao </p>
                    @endfor
                </ul>
            @endfor
            <div>
                PASTIFICIO
                COLLEZIONE DA CHEF
                Molisana
                Il Pastificio
                Grano decorticato a pietra
                Il Molise c'è
                Filiera Integrata
                100 anni di pasta
                Sartoria della pasta
                Spaghetto Quadrato
                Collezione da Chef
                Grandi Cucine
                Biologiche
                Quadrate
                Le Persone
                PRODOTTI
                Le Classiche
                Le Integrali
                Le Speciali
                Le Biologiche
                Le Gluten-Free
                Le Semole
                Le Extra di Lusso
            </div>
        </div>
    </footer>
</body>
</html>
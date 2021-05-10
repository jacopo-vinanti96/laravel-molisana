@extends('layouts.defaultPage')

@section('pageTitle') Le Molisana - Home @endsection

@section('main')
    <main class="home__main">
        <div class="container">
            @for ($i = 0; $i < count($types); $i++)
                <h2>{{ $types[$i]['title'] }}</h2>
                <ul class="products_template">
                    @for ($j = 0; $j < count($types[$i]['elems']); $j++)
                        <li>
                            <a href= {{ route( 'prodotti', ['id' => $types[$i]['elems'][$j]['id'] ] ) }}>
                                <img class="product" src= {{ $types[$i]['elems'][$j]['src'] }} alt= {{ $types[$i]['elems'][$j]['titolo']}}>
                            </a>
                        </li>
                    @endfor
                </ul>
            @endfor
        </div>
    </main>
@endsection
</body>
</html>
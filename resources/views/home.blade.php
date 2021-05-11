@extends('layouts.defaultPage')

@section('pageTitle') Le Molisana - Home @endsection

@section('main')
    <main class="home__main">
        <div class="container">
            @foreach ($types as $type)
                <h2>{{ $type['title'] }}</h2>
                <ul class="products_template">
                    @foreach ($type['elems'] as $pasta)
                        <li>
                            <a href= {{ route( 'prodotti', ['id' => $pasta['id'] ] ) }}>
                                <img class="product" src= {{ $pasta['src'] }} alt= {{ $pasta['titolo']}}>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </main>
@endsection
</body>
</html>
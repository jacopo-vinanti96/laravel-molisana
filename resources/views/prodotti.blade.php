@extends('layouts.defaultPage')

@section('pageTitle') Le Molisana - Prodotti @endsection

@section('main')
    <main class="prodotti__main">
        <div class="container">
            <h1>{{ $data[$id]['titolo'] }}</h1>
            <img src={{ $data[$id]['src-h'] }} alt="">
        </div>
        <div class="carousel">
            <a href={{ route( 'prodotti', ['id' => $prevProd ] ) }}><i class="fas fa-angle-left"></i></a>
            <img class="carousel__img" src={{ $data[$id]['src-p'] }} alt="">
            <a href={{ route( 'prodotti', ['id' => $nextProd ] ) }}><i class="fas fa-angle-right"></i></a>
        </div>
        <div class="container">
            <p>{!! $data[$id]['descrizione'] !!}</p>
        </div>
    </main>
@endsection
</body>
</html>
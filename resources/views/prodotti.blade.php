@extends('layouts.defaultPage')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection

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
@extends('layouts.defaultPage')

@section('pageTitle') Le Molisana - Prodotti @endsection

@section('main')
    <main class="prodotti__main">
        <div class="container">
            <h1>{{ $data[$id]['titolo'] }}</h1>
            <img src={{ $data[$id]['src-h'] }} alt="">
            <img src={{ $data[$id]['src-p'] }} alt="">
            <p>{!! $data[$id]['descrizione'] !!}</p>
        </div>
    </main>
@endsection
</body>
</html>
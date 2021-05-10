@extends('layouts.defaultPage')

@section('pageTitle') Le Molisana - Prodotti @endsection

@section('main')
    <main class="prodotti__main">
        <div class="container">
            {{ var_dump($data[$id]) }}
        </div>
    </main>
@endsection
</body>
</html>
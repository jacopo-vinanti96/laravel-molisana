@extends('layouts.defaultPage')

@section('pageTitle') Le Molisana - News @endsection

@section('main')
    <main class="news__main">
        <div class="container">
            <h1>Ultime notizie</h1>
            <ul>
                @foreach ( $notizie as $notizia )
                    <li>
                        <h2>{{ $notizia['date'] }}</h2>
                        <p>{{ $notizia['content'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
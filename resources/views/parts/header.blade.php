<header>
    <img class="logo" src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo Molisana">
    <ul>
        <li><a class={{ Route::getCurrentRoute()->getName() == 'home'? 'active' : '""' }} href={{ route('home') }}>Home</a></li>
        <li><a class={{ Route::getCurrentRoute()->getName() == 'prodotti'? 'active' : '""' }} href={{ route('prodotti') }}>Prodotti</a></li>
        <li><a class={{ Route::getCurrentRoute()->getName() == 'news'? 'active' : '""' }} href={{ route('news') }}>News</a></li>
    </ul>
</header>
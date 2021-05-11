<footer>
    <div class="container">
        @for ( $i = 0; $i < count($footer_rows); $i++ )
            <div class="footer__wrapper" >
                @if ( $footer_rows[$i]['title'] === false )
                    <img src= {{ asset($footer_rows[$i]['img']) }} >
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
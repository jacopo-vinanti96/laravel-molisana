<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = config('paste');

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    for ( $i = 0; $i < count($data); $i++ ) {
        $data[$i]['id'] = $i;
        if ( $data[$i]['tipo'] == 'lunga' ) {
            $lunghe[] = $data[$i];
        } else if ( $data[$i]['tipo'] == 'corta' ) {
            $corte[] = $data[$i];
        } else if ( $data[$i]['tipo'] == 'cortissima' ) {
            $cortissime[] = $data[$i];
        }
    }

    $types = [
        [
            'elems' => $lunghe,
            'title' => 'le lunghe',
        ],
        [
            'elems' => $corte,
            'title' => 'le corte',
        ],
        [
            'elems' => $cortissime,
            'title' => 'le cortissime',
        ],
    ];

    return view('home', [
        'types' => $types
    ]);
})->name('home');

Route::get('/prodotto/{id?}', function ($id = 0) {
    
    $data = config('paste');
    
    if ( $id < 0 || $id >= count( $data ) ) {
        return response("<h1 style=\"text-align: center; line-height: 100vh\">Siamo spiacenti, il prodotto non esiste</h1>", 404);
    }

    $nextProd = $id == count($data) - 1? 0 : $id + 1;
    $prevProd = $id == 0? count($data) - 1 : $id - 1;

    return view('prodotti', [
        'data' => $data,
        'id' => $id,
        'prevProd' => $prevProd,
        'nextProd' => $nextProd
    ]);
})
->where( (int)'id', '>=', 0, '<=', count( config('paste') ) )
->name('prodotti');
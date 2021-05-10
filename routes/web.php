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

    return view('home')
    ->with( 'types', $types );
});

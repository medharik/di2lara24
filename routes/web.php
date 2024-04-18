<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;
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
    return view('welcome');
});
Route::get('/produit/afficher', [ProduitController::class,'afficher']);
Route::get('/produit/{libelle?}/{prix?}', [ProduitController::class,'index']);
Route::get('/form', function () {
    return view('form');
});

Route::get('/prenom/{pr?}', function ($pr="inconnu") {
    return   "je m'appele $pr";
});
Route::get('/somme/{a?}/{b?}', function ($a=0,$b=0) {
    $somme=$a+$b;
    return view('somme',['a'=>$a,'deuxieme'=>$b,'somme'=>$somme])  ;
})->where(['a' => '[0-9]+', 'b' => '[0-9]+']);
Route::post('/somme', function (Request $r) {

    return view('somme',['a'=>$r->a,'deuxieme'=>$r->b,'somme'=>$r->a+$r->b])  ;
})->where(['a' => '[0-9]+', 'b' => '[0-9]+']);

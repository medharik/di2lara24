<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\StudentController;
use App\Models\Departement;

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

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    // Route::get('/product/create', [ProductController::class,'create'] );
    // Route::post('/product/store', [ProductController::class,'store'] );
    // Route::get('/produit/afficher', [ProduitController::class,'afficher']);
    // Route::get('/produit/{libelle?}/{prix?}', [ProduitController::class,'index']);
    // Route::get('/form', function () {
    //     return view('form');
    // });

    // Route::get('/prenom/{pr?}', function ($pr="inconnu") {
    //     return   "je m'appele $pr";
    // });
    // Route::get('/somme/{a?}/{b?}', function ($a=0,$b=0) {
    //     $somme=$a+$b;
    //     return view('somme',['a'=>$a,'deuxieme'=>$b,'somme'=>$somme])  ;
    // })->where(['a' => '[0-9]+', 'b' => '[0-9]+']);
    // Route::post('/somme', function (Request $r) {

    //     return view('somme',['a'=>$r->a,'deuxieme'=>$r->b,'somme'=>$r->a+$r->b])  ;
    // })->where(['a' => '[0-9]+', 'b' => '[0-9]+']);

Route::resource('products', ProductController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('departements', DepartementController::class);
Route::resource('classes', ClasseController::class);
Route::resource('students', StudentController::class);

Route::get('test', [ProductController::class,'test'])->name('youssef');
// Route::get('test', [ProductController::class,'test'])->name('youssef');

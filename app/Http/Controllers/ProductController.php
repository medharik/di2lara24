<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //fonction qui affiche le formulaire d'ajout d'un nouveau produit
    public function create() {
        return view('products.create');
    }
    public function store(Request $request) {

    Product::create($request->all());
     return   $this->create();
    }

}

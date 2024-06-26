<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * method : GET / URI : /products   ou bien utilise la route : product.index
     */
    public function index()
    {
        $produits =  Product::all();
        return $produits;
    }

    function test()
    {
        return view("test");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * method : POST , URL : /product ou la route : product.store
     */
    public function store(Request $request)
    {
        //
        echo "je suis dans store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $produit= Product::find($id);
        return $produit;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */
    public function edit($id)
    {
        echo "je suis dans edit";
    }

    /**
     * Update the specified resource in storage bd.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * method : PUT
     * url : produit/id , route : products.update
     */
    public function update(Request $request, $id)
    {
        echo "je suis dans update, et id= $id";
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * methode : DELETE , uri : products/2 , route : products.destroy
     */
    public function destroy($id)
    {
        echo " je suis dans destroy et id = $id";
    }
}

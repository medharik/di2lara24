<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

    function afficher()  {
        echo "je suis dans afficher du controller ProduitController";
    }
    function index($libelle="",$prix=0)  {

        $ttc=Produit::calculer_ttc($prix);
return view('produit.show',[ 'libelle'=>$libelle,'prix'=>$prix,'ttc'=>$ttc]);
    }

}// /facture/13/8000 => page qui affiche : le montant tht de la facture 13 est : 8000
